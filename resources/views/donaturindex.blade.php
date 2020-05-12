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
                   Dashboard Data Donatur - 
                </div>
				<div class="card-body">
                    <a href="/donatur/tambah" class="btn btn-primary">Tambah Dpnatur Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Donatur :</p>
			<form action="/donatur/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Donatur .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Nama</th>
									<th>Tanggal Lahir</th>
									<th>Gender</th>
									<th>Alamat</th>
									<th>WhatsApp</th>
									<th>Email </th>
									<th>No Rekening Donatur</th>
									<th>Action</th>
								</tr> 

						</thead>
        <tbody>
		@foreach($donatur as $d)
		<tr>
			<td>{{ $d->nama_donatur }}</td>
			<td>{{ $d->tgl_lahir_donatur }}</td>
			<td>{{ $d->jenis_kelamin_donatur }}</td>
			<td>{{ $d->alamat_donatur }}</td>
            <td>{{ $d->WA_donatur }}</td>
            <td>{{ $d->Email_donatur }}</td>
            <td>{{ $d->no_rekening_donatur }}</td>

            
			<td>
				<a href="/donatur/edit/{{ $d->id_donatur }}"  class="btn btn-warning">Edit</a>
				|
				<a href="/donatur/delete/{{ $d->id_donatur }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $donatur->currentPage() }} <br/>
	Jumlah Data : {{ $donatur->total() }} <br/>
	</br>
	{{ $donatur->links()}}
</body>
</html>