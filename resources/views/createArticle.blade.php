@extends('head')
@section('namira')
<div class="buat-artikel d-flex justify-content-center w-100" style="margin: 100px 0px">
    <div class="w-75 d-flex align-items-center flex-column ">
        <form action="" class=" d-flex align-items-center flex-column custom-artikel">
            <a href="articleDash" class="btn btn-success align-self-start">Kembali</a>
            <h1>Buat Artikel</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default" style="">Judul</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required style="">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="imgAr" required style="">
                <label class="input-group-text" for="inputGroupFile02" style="">Gambar</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default" style="">Nama Creator</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required style="">
            </div>
            <img src="https://img.freepik.com/free-psd/earth-text-effect_23-2149711915.jpg?w=1380&t=st=1666020343~exp=1666020943~hmac=af6cabaadb44c16f78f5c52596b7c42b49182714a1febeb12790174fa6980929" class="slider" alt="" id="imgimgAr" style="background-position: center;
            background-size: cover;
            object-fit: cover;margin-top:10px !important">

            <div class="" style="height: 600px">
                <div class="toolbar" id="toolbar"></div>
                <div class="quill " id="quill"></div>
                <input type="hidden" name="quill" id="inputQuill">
            </div>
            <button type="submit" class="submit-btn btn btn-primary mt-lg-5">Rilis Artikel</button>
        </form>
    </div>
</div>
@endsection