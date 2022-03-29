<?php
namespace App\Exports\Sales;

use App\Models\Sales\SalesSellingTransaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TransactionExport implements FromView, ShouldAutoSize
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(array $date)
	{
		$this->date         = $date;
	}

	/**
	 * Export Format By View Blade.
	 *
	 * @return Illuminate\Contracts\View\View
	 */
	public function view(): View
	{
		$date         = $this->date;

		$Transaction = SalesSellingTransaction::query()
		->select(
			'*',
			'master_client.*',
			'sales_selling.sales_selling_price_grandtotal',
			'sales_selling.sales_selling_job',
			'sales_selling_transaction.created_at AS created_at_transaction',
			'sales_selling_transaction.updated_at AS updated_at_transaction',
		)
		->leftJoin('sales_selling', 'sales_selling.sales_selling_id','sales_selling_transaction.sales_selling_id')
		->leftJoin('users', 'users.id','sales_selling_transaction.user_id')
		->leftJoin('master_employee', 'users.master_employee_id','master_employee.master_employee_id')
		->leftJoin('master_client', 'sales_selling.master_client_id','master_client.master_client_id')
		->leftJoin('sales_selling_transaction_type', 'sales_selling_transaction_type.sales_selling_transaction_type_id','sales_selling_transaction.sales_selling_transaction_type_id')
		->whereBetween('sales_selling_transaction_date', [date('Y-m-d',$date['startOfMonth']), date('Y-m-d',$date['endOfMonth'])])
		->get();

		return view('sales.transaction.excel', [
			'transaction' => $Transaction,
			'date'        => $date
		]);
	}
}
