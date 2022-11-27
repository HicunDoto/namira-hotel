@extends('templates.layout')

@section('title','Edit Promo')

@section('container')
    <form action="{{url('/adminnamira')}}/{{$promos->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Nama" value="{{$promos->namaPromo}}" name="namaPromo">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Judul" value="{{$promos->judulPromo}}" name="judulPromo">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Keterangan" value="{{$promos->keteranganPromo}}" name="keteranganPromo">
            </div>
            <div>
                <img src="{{ asset('storage/'.$promos->fotoPromo) }}" width="50" height="50" alt="">
            </div>
            <div style="padding-bottom: 5px;">
                <label for="fotoku">Upload Foto</label><br><input id="fotoku" type="file" name="file">   
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection