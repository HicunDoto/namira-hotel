@extends('templates.layout')

@section('title','Add Promo')

@section('container')
<body>
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <form action="{{url('/adminnamira/promo')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Nama" name="namaPromo">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Judul" name="judulPromo">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Keterangan" name="keteranganPromo">
            </div>
            <div style="padding-bottom: 5px;">
                <label for="fotoku">Upload Foto</label><br><input id="fotoku" type="file" name="file">   
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection