<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\CoreController as Controller;

use App\Exports\Sales\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;

class SalesSellingTransactionController extends Controller
{
    /**
     * Excel Export Data.
     *
     * @return Maatwebsite\Excel\Facades\Excel
     */
    public function excel() 
    {
      $date = $this->getStartAndEndOfMonth();

      return Excel::download(new TransactionExport($date), "Rekap Transaksi Bayar Tgl " . date('d F Y',$date['startOfMonth']) . " - " . date('d F Y',$date['endOfMonth']) . ".xlsx");
    }
  }
