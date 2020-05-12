<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SIDONI PETERPAN</title>
    </head>
	<body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                  DASHBOARD DATA PESERTA - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/peserta" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	
	
 
	<form action="/peserta/store" method="post">
		{{ csrf_field() }}
		
		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta ..">
 
                            @if($errors->has('nama_peserta'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_peserta')}}
                                </div>
                            @endif
 
                        </div>
		
                        <div class="form-group">
                            <label>Nama Aktivitas</label>
                            <input type="text" name="nama_aktivitas" class="form-control" placeholder="Nama Aktivitas ..">
 
                            @if($errors->has('nama_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_aktivitas')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Tanggal Aktivitas</label>
                            <input type="date" name="tanggal_aktivitas" class="form-control" placeholder="Tanggal Aktivitas ..">
 
                            @if($errors->has('tanggal_aktivitas'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_aktivitas')}}
                                </div>
                            @endif
 
                        </div>
                        
                     
                        
 
        </div>


		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>












