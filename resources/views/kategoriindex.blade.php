
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
                   Dashboard Data Kategori Donasi - 
                </div>
				<div class="card-body">
                    <a href="/kategori/tambah" class="btn btn-primary">Tambah Kategori Donasi Baru</a>
                    <br/>
                    <br/> 

					<p>Cari Data Kategori Donasi :</p>
			<form action="/kategori/find" method="GET">
				<input type="text" name="find" placeholder="Find Nama Kategori Donasi .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		
					<table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
							
									<th>Nama</th>
									<th>Action</th>
							</tr> 

						</thead>
        <tbody>
		@foreach($kategori as $k)
		<tr>
			<td>{{ $k->nama_kategori }}</td>
			

            
			<td>
				<a href="/kategori/edit/{{ $k->id_kategori_donasi }}"  class="btn btn-warning">Edit</a>
				
				<a href="/kategori/delete/{{ $k->id_kategori_donasi }}"  class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br> 
	Halaman : {{ $kategori->currentPage() }} <br/>
	Jumlah Data : {{ $kategori->total() }} <br/>
	</br>
	{{ $kategori->links()}}
</body>
</html>