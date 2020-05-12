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
                  DASHBOARD DATA KATEGORI - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/kategori" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	
	
 
	<form action="/kategori/store" method="post">
		{{ csrf_field() }}
		

      


		<div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori ..">
 
                            @if($errors->has('nama_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori')}}
                                </div>
                            @endif
 
                        </div>
		
	
                     
						
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>












