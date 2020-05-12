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
                  DASHBOARD DATA BANK - <strong>TAMBAH DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/bank" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
	
	
 
	<form action="/bank/store" method="post">
		{{ csrf_field() }}
		

      


		<div class="form-group">
                            <label>Nama Bank</label>
                            <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank ..">
 
                            @if($errors->has('nama_bank'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_bank')}}
                                </div>
                            @endif
 
        </div>

        <div class="form-group">
                            <label>Nomor Rekening Bank</label>
                            <input type="number" name="rekening_bank" class="form-control" placeholder="Nomor Rekening Bank ..">
 
                            @if($errors->has('rekening_bank'))
                                <div class="text-danger">
                                    {{ $errors->first('rekening_bank')}}
                                </div>
                            @endif
 
        </div>
		
	
                     
						
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>












