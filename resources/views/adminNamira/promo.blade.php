<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROMO</title>
</head>
<body>
    <div id="promo">
        <h3>PROMO</h3>
        <button><a href="createpromo">BUAT PROMO</a></button><br>
        @foreach ($promos as $promo)
            Hello, {{ $promo->namaPromo }} - {{ $promo->judulPromo }} - {{ $promo->keteranganPromo }} - {{ $promo->fotoPromo }} - <a href="{{$promo->id}}" name="ID">EDIT</a><br />
        @endforeach
    </div>
</body>
</html>