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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>, <strong>{{ Session::get('file') }}</strong>
        </div>
    @endif
        <button><a href="createPromo">BUAT PROMO</a></button><br>
        @foreach ($promos as $promo)
            Hello, {{ $promo->namaPromo }} - {{ $promo->judulPromo }} - {{ $promo->keteranganPromo }} - <img src="{{ asset('storage/'.$promo->fotoPromo) }}" width="50" height="50" alt=""> - <a href="/adminnamira/{{$promo->id}}/editPromo" name="edit">EDIT</a> - <form action="/adminnamira/promo/{{$promo->id}}" method="post"> @csrf <button type="submit">Hapus</button></form><br />
        @endforeach
    </div>
</body>
</html>