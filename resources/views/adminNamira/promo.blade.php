@extends('templates.layout')

@section('title','List Promo')

@section('container')
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
@endsection