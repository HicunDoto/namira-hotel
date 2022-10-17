

@extends('head')
@section('namira')
<div class="text-area-home text-area-2 d-flex justify-content-center text-center text-white flex-column">
    <h1>ALWAYS TO BE GOOD</h1>
    <h2>WELCOME TO NAMIRA SYARIAH HOTEL SURABAYA</h2>
    <div class="cover-black w-100 h-100 position-absolute"></div>
</div>

<div class="w-100 promosi p-5">
    <div class="">
        <h1>OUR PROMOTION</h1>
        <h2>MAKE YOU COMFORTABLE WITH AFFORDABLE PRICE</h2>
    </div>
    <div class="d-flex justify-content-evenly py-5 flex-wrap loop-promosi">
        <div class="sled">
            <div class="slider">
                {{-- loop  --}}
                <div class="slide active">
                    <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" alt="">
                    <div class="info d-none">
                    <h2>Winter Mountains</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" alt="">
                    <div class="info d-none">
                    <h2>Tropical Desert</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" alt="">
                    <div class="info d-none">
                    <h2>Steaming Volcanoes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                {{-- loop  --}}
                <div class="navigation">
                    <i class='bx bx-chevron-left prev-btn'></i>
                    <i class='bx bx-chevron-right next-btn'></i>
                </div>
                <div class="navigation-visibility">
                    {{-- loop  --}}
                    <div class="slide-icon active"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                    {{-- endloop --}}
                </div>
            </div>
        </div>
        
        {{-- loop --}}
        {{-- <div class="card shadow m-3" style="width: 22rem;max-height:392px">
            <img src="{{asset('gambar/promo.jpg')}}" class="card-img-top" alt="promo">
            <div class="card-body">
                <h5 class="card-title">Meeting Room Area</h5>
                <p class="card-text">Diskon hingga 40% selama 1 jam sampai tanggal 17 Januari 2022. ambil dan dikmati kenyamanan dan pelayanan kami.</p>
            </div>
        </div>
        <div class="card shadow m-3" style="width: 22rem;max-height:392px"">
            <img src="{{asset('gambar/promo.jpg')}}" class="card-img-top" alt="promo">
            <div class="card-body">
                <h5 class="card-title">Meeting Room Area</h5>
                <p class="card-text">Diskon hingga 40% selama 1 jam sampai tanggal 17 Januari 2022. ambil dan dikmati kenyamanan dan pelayanan kami.</p>
            </div>
        </div>
        <div class="card shadow m-3" style="width: 22rem;max-height:392px"">
            <img src="{{asset('gambar/promo.jpg')}}" class="card-img-top" alt="promo">
            <div class="card-body">
                <h5 class="card-title">Meeting Room Area</h5>
                <p class="card-text">Diskon hingga 40% selama 1 jam sampai tanggal 17 Januari 2022. ambil dan dikmati kenyamanan dan pelayanan kami. kami mau demo najay demo pale pale pale </p>
            </div>
        </div>
        <div class="card shadow m-3" style="width: 22rem;max-height:392px"">
            <img src="{{asset('gambar/promo.jpg')}}" class="card-img-top" alt="promo">
            <div class="card-body">
                <h5 class="card-title">Meeting Room Area</h5>
                <p class="card-text">Diskon hingga 40% selama 1 jam sampai tanggal 17 Januari 2022. ambil dan dikmati kenyamanan dan pelayanan kami.</p>
            </div>
        </div> --}}
        {{-- end loop --}}
    </div>
</div>

<script>
    if($('.card-text').height() >= 96){
        $('.card-text').addClass('namira-truncate')
        // $('.truncate-a').show()
        console.log('elli')
    }
</script>
@endsection



