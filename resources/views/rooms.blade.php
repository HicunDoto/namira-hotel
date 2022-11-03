@extends('head')
@section('namira')

<div class="text-area-2 text-area-room d-flex justify-content-center text-center text-white flex-column">
    <h1>ROOMS AREA</h1>
    <h2>ALWAYS PROVIDE CONVENIENCE FOR YOU</h2>
    <div class="cover-black w-100 h-100 position-absolute"></div>
</div>
<div class="fhall d-flex flex-column justify-content-center py-5">
    {{-- loop --}}
    <div class="w-100" style="min-height:444px;margin-bottom:90px">
        <div class="row g-0 h-100">
            <div class="col-6 h-100">
                <div class="w-100 h-100">
                    <img src="{{asset('gambar/background-area-1-rooms.jpg')}}" class="img-fluid room-img rounded-start h-100" alt="..." style="
                    border-radius: unset !important;
                    background-size: cover;
                    object-fit: cover;
                    background-position: center;
                    min-height:444px">
                </div>
            </div>
            <div class="col-6" style="background-color: rgb(245, 245, 245)">
                <div class="card-body p-5">
                    <h1 class="card-title">KAMAR TIPE BELAGIO</h1>
                    <p class="card-text-top">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="svg-sec">
                        <p class="card-text fw-bold mb-1">Fasilitas :</p>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-home-alt-2 lh-base'></i>
                            <p class="m-0">&nbsp; : 2 Kasur besar, Selimut, Bantal dan Guling</p>
                        </div>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-tv lh-base'></i>
                            <p class="m-0">&nbsp; : 1 Televisi, 1 Telepon, WiFi</p>
                        </div>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-bowl-hot'></i>
                            <p class="m-0">&nbsp; : Makan 2 kali sehari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 w-100" style="min-height:444px;">
        <div class="row g-0 h-100">
            <div class="col-6" style="background-color: rgb(245, 245, 245)">
                <div class="card-body p-5">
                    <h1 class="card-title">KAMAR TIPE BELAGIO</h1>
                    <p class="card-text-top">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="svg-sec">
                        <p class="card-text fw-bold mb-1">Fasilitas :</p>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-home-alt-2 lh-base'></i>
                            <p class="m-0">&nbsp; : 2 Kasur besar, Selimut, Bantal dan Guling</p>
                        </div>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-tv lh-base'></i>
                            <p class="m-0">&nbsp; : 1 Televisi, 1 Telepon, WiFi</p>
                        </div>
                        <div class="card-text d-flex align-content-center">
                            <i class='bx bx-bowl-hot'></i>
                            <p class="m-0">&nbsp; : Makan 2 kali sehari</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 h-100">
                <div class="w-100 h-100">
                    <img src="{{asset('gambar/background-area-1-rooms.jpg')}}" class="img-fluid room-img rounded-start h-100" alt="..." style="
                    border-radius: unset !important;
                    background-size: cover;
                    object-fit: cover;
                    background-position: center;
                    min-height:444px">
                </div>
            </div>
        </div>
    </div>
    {{-- endloop --}}
</div>
<script>


</script>
@endsection