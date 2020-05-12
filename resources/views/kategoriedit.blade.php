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
                  DASHBOARD DATA Aktivitas - <strong>EDIT DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/kategori" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
 
	@foreach($kategori_donasi as $k)
	<form action="/kategori/update/{{ $k->id_kategori_donasi}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_kategori" class="form-control" 
                            placeholder="Nama Kategori Donasi .." value=" {{ $k->nama_kategori }}">
 
                            @if($errors->has('nama_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori')}}
                                </div>
                            @endif
 
                        </div>
			
                        </div>
						<div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
	</form>
	@endforeach
		
 
</body>
</html>