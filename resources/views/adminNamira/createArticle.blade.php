@extends('templates.layout')

@section('title','Add Article')

@section('container')
    <form action="{{url('/adminnamira/article')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div>
            <div style="padding-bottom: 5px;">
                <input type="date" placeholder="Tanggal" name="tglTerbit">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Judul" name="judulArticle">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Keterangan" name="keteranganArticle">
            </div>
            <div style="padding-bottom: 5px;">
                <label for="fotoku">Upload Foto</label><br><input id="fotoku" type="file" name="file">   
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection