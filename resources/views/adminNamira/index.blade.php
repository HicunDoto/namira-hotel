@extends('templates.layout')

@section('title','Dashboard')

@section('container')
    <div id="promo">
        <h3>PROMO</h3>
        @foreach ($promos as $promo)
            Hello, {{ $promo->namaPromo }} - {{ $promo->judulPromo }} - {{ $promo->keteranganPromo }} - <img src="{{ asset('storage/'.$promo->fotoPromo) }}" width="50" height="50" alt=""> <br />
        @endforeach
    </div>
    <div id="article">
        <h3>ARTICLE</h3>
        @foreach ($articles as $article)
            Hello, {{ $article->judulArticle }} - {{date('d-m-Y',strtotime($article->tglTerbit))}} - {{ $article->keterangan }} - <img src="{{ asset('storage/'.$article->fotoArticle) }}" width="50" height="50" alt=""> <br />
        @endforeach
    </div>
    <div id="contact">
        <h3>CONTACT</h3>
        @foreach ($contacts as $contact)
            Hello, {{ $contact->namaContact }} - {{ $contact->subject }} - {{ $contact->no_telp }} - {{ $contact->email }} - {{ $contact->keteranganContact }} <br />
        @endforeach
    </div>
@endsection