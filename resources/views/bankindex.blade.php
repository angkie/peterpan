
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
                   Dashboard Data Bank - 
                </div>
				<div class="card-body">
                    <a href="/bank/tambah" class="btn btn-primary">Tambah Daftar Bank Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Bank :</p>
			<form action="/bank/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Kategori Donasi .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Nama Bank</th>
                                    <th>Nomor Rekening Bank</th> 
									<th>Action</th>
							</tr> 

						</thead>
        <tbody>
		@foreach($bank as $b)
		<tr>
			<td>{{ $b->nama_bank }}</td>
            <td>{{ $b->no_rekening_bank }}</td>
			

            
			<td>
				<a href="/bank/edit/{{ $b->id_bank }}"  class="btn btn-warning">Edit</a>
				
				<a href="/bank/delete/{{ $b->id_bank }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $bank->currentPage() }} <br/>
	Jumlah Data : {{ $bank->total() }} <br/>
	</br>
	{{ $bank->links()}}
</body>
</html>