@extends('head')
@section('namira')

<div class="text-area-2 text-area-food d-flex flex-wrap justify-content-center text-center text-white">
    <div class="col-6 text-start d-flex flex-column justify-content-center" style="z-index: 5;">
        <h1>FOOD AREA</h1>
        <h2>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat.</h2>
    </div>
    <div class="col-6 d-flex align-items-center justify-content-end" style="z-index: 5">
        <div class="image-left"></div>
        <div class="image-mid"></div>
        <div class="image-right"></div>
    </div>
    <div class="cover-black w-100 h-100 position-absolute"></div>
</div>
<div class="area-restaurant d-flex justify-content-center flex-wrap-reverse">
    <div class="col-6 d-flex flex-row justify-content-end area-res" style="padding:10px">
        <div class="w-75 d-flex justify-content-end m-0" style="max-height: 548px">
            <img src="{{asset('gambar/resto (1).jpg')}}" alt="" class="resto r1 img-cover">
        </div>
        <div class="w-25 d-flex flex-column m-0">
            <img src="{{asset('gambar/resto (2).jpg')}}" alt="" class="resto r2 img-cover">
            <img src="{{asset('gambar/resto (3).jpg')}}" alt="" class="resto r3 img-cover">
        </div>
    </div>
    <div class="col-6 d-flex flex-column area-res" style="padding-top:0px !important;padding-bottom:0px !important;padding:10px">
        <div class="col-4 text-white w-100" style="margin-top:10px">
            <h1 class="m-0">RESTAURANT NAMIRA</h1>
            <h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In</h3>
        </div>
        <div class="col-8 d-flex flex-row w-100 justify-content-between h-100" style="max-height: 420px;gap:10px;margin-bottom: 10px">
            <img src="{{asset('gambar/resto (4).jpg')}}" alt="" class="resto r4 img-cover" style="">
            <img src="{{asset('gambar/resto (5).jpg')}}" alt="" class="resto r5 img-cover">
        </div>
    </div>
</div>

<div class="area-restaurant d-flex justify-content-center flex-wrap-reverse flex-row-reverse ">
    <div class="col-6 d-flex flex-row justify-content-end area-res" style="padding:10px">
        <div class="w-75 d-flex justify-content-end m-0" style="max-height: 548px">
            <img src="{{asset('gambar/resto (1).jpg')}}" alt="" class="resto r1 img-cover">
        </div>
        <div class="w-25 d-flex flex-column m-0">
            <img src="{{asset('gambar/resto (2).jpg')}}" alt="" class="resto r2 img-cover">
            <img src="{{asset('gambar/resto (3).jpg')}}" alt="" class="resto r3 img-cover">
        </div>
    </div>
    <div class="col-6 d-flex flex-column area-res" style="padding-top:0px !important;padding-bottom:0px !important;padding:10px">
        <div class="col-4 text-white w-100" style="margin-top:10px">
            <h1 class="m-0">RESTAURANT NAMIRA</h1>
            <h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In</h3>
        </div>
        <div class="col-8 d-flex flex-row w-100 justify-content-between h-100" style="max-height: 420px;gap:10px;margin-bottom: 10px">
            <img src="{{asset('gambar/resto (4).jpg')}}" alt="" class="resto r4 img-cover" style="">
            <img src="{{asset('gambar/resto (5).jpg')}}" alt="" class="resto r5 img-cover">
        </div>
    </div>
</div>

<script>


</script>
@endsection