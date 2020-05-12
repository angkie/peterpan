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
                   Dashboard Data Aktivitas - 
                </div>
				<div class="card-body">
                    <a href="/aktivitas/tambah" class="btn btn-primary">Tambah Aktivitas Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Aktivitas :</p>
			<form action="/Aktivitas/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Aktivitas .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
									
									<th>id_trans </th>
									<th>Nama Aktivitas </th> 
									<th>Rencana Tanggal  </th>
									<th>Realisasi Tanggal</th>
									<th>Jenis Aktivitas</th>
									<th>Rencana Donasi</th>
									<th>Realisasi Donasi</th>
									<th>Action</th>
									
								</tr> 

						</thead>
        <tbody>
		@foreach($aktivitas as $a)
		<tr> 
			<td>{{ $a->id_trans }}</td>
			<td>{{ $a->nama_aktivitas }}</td>
			<td>{{ $a->rencana_tanggal }}</td>
			<td>{{ $a->realisasi_tanggal }}</td>
			<td>{{ $a->jenis_aktivitas }}</td>
            <td>{{ $a->rencan_donasi }}</td>
            <td>{{ $a->realisasi_donasi }}</td>
     

            
			<td>
				<a href="/aktivitas/edit/{{ $a->id_aktivitas }}"  class="btn btn-warning">Edit</a>
				|
				<a href="/aktivitas/delete/{{ $a->id_aktivitas }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $aktivitas->currentPage() }} <br/>
	Jumlah Data : {{ $aktivitas->total() }} <br/>
	</br>
	{{ $aktivitas->links()}}
</body>
</html>