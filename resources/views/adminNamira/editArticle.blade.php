@extends('templates.layout')

@section('title','Edit Article')

@section('container')
<body>
    <form action="{{url('/adminnamira')}}/{{$articles->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div>
            <div style="padding-bottom: 5px;">
                <input type="date" value="{{date('Y-m-d',strtotime($articles->tglTerbit))}}" name="tglTerbit">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Judul" value="{{$articles->judulArticle}}" name="judulArticle">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Keterangan" value="{{$articles->keterangan}}" name="keteranganArticle">
            </div>
            <div>
                <img src="{{ asset('storage/'.$articles->fotoArticle) }}" width="50" height="50" alt="">
            </div>
            <div style="padding-bottom: 5px;">
                <label for="fotoku">Upload Foto</label><br><input id="fotoku" type="file" name="file">   
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection