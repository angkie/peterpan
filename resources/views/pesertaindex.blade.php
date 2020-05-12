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
                   Dashboard Data Peserta - 
                </div>
				<div class="card-body">
                    <a href="/peserta/tambah" class="btn btn-primary">Tambah Peserta Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Donatur :</p>
			<form action="/peserta/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Donatur .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Nama Peserta</th>
									<th>ID Aktivitas</th>
									<th>Nama Aktivitas</th>
									<th>Tanggal Aktivitas</th>
									<th>Action</th>
								</tr> 

						</thead>
        <tbody>
		@foreach($peserta as $p)
		<tr>
			<td>{{ $p->nama_peserta }}</td>
			<td>{{$p->nama_aktivitas}}</td>
			<td>{{ $p->nama_aktivitas }}</td>
			<td>{{ $p->tanggal_aktivitas }}</td>
           

            
			<td>
				<a href="/peserta/edit/{{ $p->id_peserta }}"  class="btn btn-warning">Edit</a>
				|
				<a href="/peserta/delete/{{ $p->id_peserta }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $peserta->currentPage() }} <br/>
	Jumlah Data : {{ $peserta->total() }} <br/>
	</br>
	{{ $peserta->links()}}
</body>
</html>