@extends('head')
<div class="create-promo d-flex flex-column align-items-center justify-content-center align-items-center">
    <div style="width: 500px">
        <a href="dashboard"><button class="btn btn-danger mb-2"><b>Batal</b></button></a>
    </div>
    <form action="" style="background-color: #4f6fa5">
        <h1 class="text-white">Edit Promo</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="imgInp">
        </div>
        <button class="btn btn-primary">Upload</button>
    </form>
    <h5 class="m-0">Ukuran gambar 1000px x 275/300px</h5>
    <img src="https://img.freepik.com/free-psd/earth-text-effect_23-2149711915.jpg?w=1380&t=st=1666020343~exp=1666020943~hmac=af6cabaadb44c16f78f5c52596b7c42b49182714a1febeb12790174fa6980929" class="slider" alt="" id="imgimg" style="background-position: center;
    background-size: cover;
    object-fit: cover;margin-top:10px !important">
</div>