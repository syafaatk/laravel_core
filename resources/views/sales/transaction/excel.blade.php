<table>
	<thead>
		<tr>
			<th colspan="13">Rekap Transaksi Bayar Tanggal {{ date('d F Y',$date['startOfMonth']) }} s/d {{ date('d F Y', $date['endOfMonth']) }}</th>
		</tr>
		<tr>
			<th>No.</th>
			<th>Tgl Transaksi</th>
			<th>No. SPK</th>
			<th>Pelanggan</th>
			<th>Job</th>
			<th>Grandtotal</th>
			<th>Bayar</th>
			<th>Via</th>
			<th>Memo</th>
			<th>Oleh</th>
			<th>Status</th>
			<th>Waktu Input</th>
			<th>Terakhir Update</th>
		</tr>
	</thead>
	<tbody>
		@foreach($transaction as $data)
		<tr>
			<td>{{ ($loop->index) + 1 }}</td>
			<td>{{ $data->sales_selling_transaction_date }}</td>
			<td>{{ $data->sales_selling_id }}</td>
			<td>{{ $data->master_client_name }}</td>
			<td>{{ $data->sales_selling_job }}</td>
			<td>{{ $data->sales_selling_price_grandtotal }}</td>
			<td>{{ $data->sales_selling_transaction_group }}</td>
			<td>{{ $data->sales_selling_transaction_type_name }}</td>
			<td>{{ $data->sales_selling_transaction_memo }}</td>
			<td>{{ $data->master_employee_name }}</td>
			<td>{{ $data->sales_selling_transaction_checked_finance }}</td>
			<td>{{ $data->created_at_transaction }}</td>
			<td>{{ $data->updated_at_transaction }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
