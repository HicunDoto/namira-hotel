@extends('head')
@section('namira')

<div class="text-area-2 text-area-room d-flex justify-content-center text-center text-white flex-column">
    <h1>ROOMS AREA</h1>
    <h2>ALWAYS PROVIDE CONVENIENCE FOR YOU</h2>
    <div class="cover-black w-100 h-100 position-absolute"></div>
</div>
<div class="fhall d-flex justify-content-center py-5">
    {{-- loop --}}
    <div class="card mb-3" style="height:304px;min-height:304px;border:2px solid #202020">
        <div class="row g-0">
            <div class="col-6">
                <div class="w-100">
                    <img src="{{asset('gambar/background-area-1-rooms.jpg')}}" class="img-fluid room-img rounded-start" alt="..." >
                </div>
            </div>
            <div class="col-6">
                <div class="card-body">
                    <h5 class="card-title">KAMAR TIPE BELAGIO</h5>
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
    {{-- endloop --}}
</div>
<script>


</script>
@endsection