<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/namira.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/slide.scss')}}"> --}}
	@include('cdn')
</head>
<body>
    <section id="area-1">
		<div class="navbar d-flex flex-row align-items-center">
			<div class="nav-left col-3 d-flex justify-content-center">
				<img src="{{asset('gambar/logo-area-1.png')}}" class="logo">
			</div>
			<div class="col-1"></div>
			<div class="nav-mid d-flex align-items-center col-8">
				<div class="isi-nav col-11 d-flex justify-content-end align-items-center">
					<div class="w-auto"><a href="/home">HOME</a></div>
					<div class="w-auto"><a href="/rooms">ROOMS</a></div>
					<div class="w-auto"><a href="/functionhall">FUNCTION HALL</a></div>
					<div class="w-auto"><a href="/foodresto">FOOD & RESTO</a></div>
					<div class="w-auto"><a href="/articles">ARTICLES</a></div>
					<div class="w-auto"><a href="/contact">CONTACT US</a></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		@yield('namira')
	</section>
	<section>
		<div class="bot-nav"></div>
	</section>
</body>
<script>
$(document).ready(function(){
	$(this).scrollTop(0);
	$(window).scroll(function(){
	let scroll = $(window).scrollTop();
	if (scroll > 10) {
		$(".navbar").css({"background" : "rgba(32, 32, 32, 1)","border-bottom":"2px solid gold"});
		$(".navbar").stop().animate({"height" : "70px"},100); 
	}
	else{
		$(".navbar").css({"background" : "rgba(32, 32, 32, 0)","border-bottom":"unset",});  	
		$(".navbar").stop().animate({"height" : "150px"},100);  	
	}
	})

	$('#flexCheckChecked').on('click', function(){
		var passInput = $(".pswd");
		if(passInput.attr('type')==='password')
			{
			passInput.attr('type','text');
		}else{
			passInput.attr('type','password');
		}
	})

	$('.loop-promo').on('mouseenter',function(){
		$(this).find('.loop-menu').css('display','flex').hide().fadeIn()
	})
	$('.loop-promo').on('mouseleave',function(){
		$(this).find('.loop-menu').fadeOut()
	})
})
if($('body').find('.kotak-login').length){
	$('.bot-nav').addClass('d-none');
	console.log('huihuhu')
}
if($('body').find('.dashboard').length){
	$('.bot-nav').addClass('d-none');
	$('.navbar').addClass('d-none');
	console.log('huihuhu')
}
$('.a-h1').on('click',function(){
	$(this).addClass('a-href-aktif').removeClass('a-href')
	$('.a-h2, .a-h3').removeClass('a-href-aktif').addClass('a-href')
	$('#promo').removeClass('d-none').addClass('d-flex')
	$('#article, #kontak').removeClass('d-flex').addClass('d-none')
})
$('.a-h2').on('click',function(){
	$(this).addClass('a-href-aktif').removeClass('a-href')
	$('.a-h1, .a-h3').removeClass('a-href-aktif').addClass('a-href')
	$('#article').removeClass('d-none').addClass('d-flex')
	$('#promo, #kontak').removeClass('d-flex').addClass('d-none')
})
$('.a-h3').on('click',function(){
	$(this).addClass('a-href-aktif').removeClass('a-href')
	$('.a-h2, .a-h1').removeClass('a-href-aktif').addClass('a-href')
	$('#kontak').removeClass('d-none').addClass('d-flex')
	$('#promo, #article').removeClass('d-flex').addClass('d-none')
})
</script>
<script src="../js/slide.js"></script>
</html>