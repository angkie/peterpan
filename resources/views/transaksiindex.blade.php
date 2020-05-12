<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
	<body> 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
	
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Dashboard Data Transaksi Donasi - 
                </div>
				<div class="card-body">
                    <a href="/transaksi/tambah" class="btn btn-primary">Tambah Transaksi Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Donatur :</p>
			<form action="/transaksi/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Donatur .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Tanggal Transaksi</th>
									<th>Nominal Donasi</th>
									<th>Keterangan Donasi</th>
									<th>Donatur</th>
                                    <th>Kategori Donasi</th>
                                    <th>Bank</th> 
									<th>Action</th>
								</tr> 

						</thead>
        <tbody>
		@foreach($transaksi_donasi as $t)
		<tr>
			<td>{{ $t->tanggal_transaksi }}</td>
			<td>{{$t->nominal_donasi}}</td>
			<td>{{ $t->keterangan_donasi }}</td> 
			<td>{{ $t->nama_donatur }}</td> 
			<td>{{ $t->nama_kategori }}</td> 
			<td>{{ $t->nama_bank }}</td> 
			
           

            
			<td>
				<a href="/transaksi/edit/{{ $t->id_transaksi}}"  class="btn btn-warning">Edit</a>
				|
				<a href="/transaksi/delete/{{ $t->id_transaksi }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $transaksi_donasi->currentPage() }} <br/>
	Jumlah Data : {{ $transaksi_donasi->total() }} <br/>
	</br>
	{{ $transaksi_donasi->links()}}
</body>
</html>