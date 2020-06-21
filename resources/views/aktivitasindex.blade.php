<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
	<body> 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mb-0 h1" href="homeafter">
        <img src="style/assets/img/Slogo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            SIDONI
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="donatur">Donatur <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="kategori">Kategori Donasi <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="aktivitas">Aktivitas <span class="sr-only">(current)</span></a></li>

                        <li class="nav-item">
                        <a class="nav-link" href="peserta">Peserta <span class="sr-only">(current)</span></a></li>

                        <li class="nav-item">
                        <a class="nav-link" href="transaksi">Transaksi <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#laporan">Lihat Laporan</a></li>
                    </ul>
                </div>
    </nav>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
	
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-lg-center font-weight-bolder">
                   A K T I V I T A S
                </div>
				<div class="card-body">
                    <a href="/aktivitas/tambah" class="btn btn-success float-left active" role="button"
					aria-pressed="true">Tambah Aktivitas Baru</a>
                    <br/>
                    <br/> 

					<p></p>
			<form action="/Aktivitas/find" method="GET">
				<input type="text" name="find" placeholder="Cari Nama Aktivitas .." value="{{ old('find') }}">
				<input type="submit" value="find">
			</form>
		<p></p>
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

<link rel="stylesheet" type="text/css" href="{{ asset('public/css/styles.css') }}">
        
<script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>