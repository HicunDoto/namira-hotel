@extends('head')
@section('namira')

<div class="text-area-2 text-area-hall d-flex justify-content-center text-center text-white flex-column">
    <h1>FUNCTION HALL</h1>
    <h2>ALWAYS PROVIDE CONVENIENCE FOR YOU</h2>
    <div class="cover-black w-100 h-100 position-absolute"></div>
</div>
<div class="fhall d-flex justify-content-center py-5">
    <div class="card mb-3" style="max-width: 940px;height:300px">
        <div class="row g-0">
            <div class="col-6">
                <div class="w-100" style="max-height: 150px">
                    <img src="{{asset('gambar/background-area-2-hall.jpg')}}" class="img-fluid hall-img-1" alt="..." >
                </div>
                <div class="w-100" style="max-height: 150px">
                    <img src="{{asset('gambar/background-area-1-hall.jpg')}}" class="img-fluid hall-img-2" alt="...">
                </div>
            </div>
            <div class="col-6">
            <div class="card-body">
                <h5 class="card-title">KAMAR TIPE BELAGIO</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="svg-sec">
                    <p class="car-text fw-bold mb-1">Fasilitas :</p>
                    <div class="card-text d-flex align-content-center">
                        <i class='bx bx-home-alt-2 lh-base'></i>
                        <p class="m-0">&nbsp; : 2 Kasur besar, Selimut, Bantal dan Guling</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
<script>


</script>
@endsection