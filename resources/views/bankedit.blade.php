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
                  DASHBOARD DATA Bank - <strong>EDIT DATA</strong> -
                </div> 
				<div class="card-body">
                    <a href="/bank" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
 
	@foreach($bank as $b)
	<form action="/bank/update/{{ $b->id_bank}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_bank" class="form-control" 
                            placeholder="Nama Bank .." value=" {{ $b->nama_bank }}">
 
                            @if($errors->has('nama_bank'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_bank')}}
                                </div>
                            @endif
 
                         </div>  
			
        </div> 


        <div class="form-group">
                            <label>Nomor Rekening Bank</label>
                            <input type="text" name="rekening_bank" class="form-control" 
                            placeholder="No Rekening Bank.." value=" {{ $b->no_rekening_bank }}">
 
                            @if($errors->has('rekening_bank'))
                                <div class="text-danger">
                                    {{ $errors->first('rekening_bank')}}
                                </div>
                            @endif
 
                         </div>  

			
                <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                 </div> 
       

</div>				
	</form>
	@endforeach
		
 
</body>
</html>