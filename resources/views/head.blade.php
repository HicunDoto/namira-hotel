<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/namira.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
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
var urlArtikel = "https://pokeapi.co/api/v2/pokemon"
var urlMessege = "https://pokeapi.co/api/v2/ability"
var xhtml = new XMLHttpRequest();
function artikelFunc(){
	xhtml.open("GET",urlArtikel,true);
	xhtml.send();
	xhtml.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var data = JSON.parse(this.responseText);
			// console.log(data)
			$('#tableArtikel').DataTable({
			"data" : data.results,
			"columns": [
				{ data: 'name' },
				{ data: 'url' },
			],
		});
		}
	}
}
function messegeFunc(){
	xhtml.open("GET",urlMessege,true);
	xhtml.send();
	xhtml.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var data = JSON.parse(this.responseText);
			// console.log(data)
			$('#tableMessege').DataTable({
			"data" : data.results,
			"columns": [
				{ data: 'name' },
				{ data: 'url' },
			],
		});
		}
	}
}

if($('.articleDash').hasClass('a-href-aktif')){
	artikelFunc()
	console.log('artikelfind')
}
if($('.messegeDash').hasClass('a-href-aktif')){
	messegeFunc()
	console.log('messegefind')
}


$(document).ready(function(){
	$(this).scrollTop(0);
	$(window).scroll(function(){
		let scroll = $(window).scrollTop();
		if (scroll > 10) {
			$(".navbar").css({"background" : "rgba(32, 32, 32, 1)","border-bottom":"2px solid gold"});
			$(".navbar").stop().animate({"height" : "70px"},100); 
		}
		else{
			if($('body').find('.detect-kontak').length){
				$(".navbar").css({"background" : "rgba(32, 32, 32, 1)","border-bottom":"unset",});  	
				$(".navbar").stop().animate({"height" : "150px"},100);  
			}else{
				$(".navbar").css({"background" : "rgba(32, 32, 32, 0)","border-bottom":"unset",});  	
				$(".navbar").stop().animate({"height" : "150px"},100);  	
			}
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

	$(function(){
		var container = $('.barbar');
		var isiisi = $('.isiberita');
		var ee = 'loding';

		container.pagination({
			dataSource: 'https://api.flickr.com/services/feeds/photos_public.gne?tags=cat%20orange&tagmode=any&format=json&jsoncallback=?',
			locator: 'items',
			totalNumber : 120,
			pageSize : 10,
			autoHidePrevious: true,
			autoHideNext: true,
			ajax: {
				beforeSend: function() {
					isiisi.html('Loading data from flickr.com ...');
				}
			},
			
			callback: function(data, pagination) {
				var html = template(data);
				isiisi.html(html);
			},
		});
	})

	function template(data) {
		var html = '<ul>';
		$.each(data, function(index, item){
			html += '<li>'+ item.description +'</li>';
		});
		html += '</ul>';
		return html;
	}
	
	
	
})
if($('body').find('.kotak-login').length){
	$('.bot-nav').addClass('d-none');
	console.log('huihuhu')
}
if($('body').find('.dashboard').length || $('body').find('.create-promo').length || $('body').find('.buat-artikel').length ){
	$('.bot-nav').addClass('d-none');
	$('.navbar').addClass('d-none');
	console.log('huihuhu')
}

if($('body').find('.create-promo').length){
	console.log('buat-promo')
	imgInp.onchange = evt => {
	  const [file] = imgInp.files
	  if (file) {
		imgimg.src = URL.createObjectURL(file)
	  }
	}
}

if($('body').find('.detect-kontak').length){
	if (scroll > 10) {
		$(".navbar").css({"background" : "rgba(32, 32, 32, 1)","border-bottom":"2px solid gold"});
		$(".navbar").stop().animate({"height" : "70px"},100); 
	}
	else{
		$(".navbar").css({"background" : "rgba(32, 32, 32, 1)","border-bottom":"unset",});  	
		$(".navbar").stop().animate({"height" : "150px"},100);  	
	}
}

if($('body').find('.buat-artikel').length){
	console.log('buat-artikel')
	imgAr.onchange = evt => {
	  const [file] = imgAr.files
	  if (file) {
		imgimgAr.src = URL.createObjectURL(file)
	  }
	}

	var quill = new Quill('#quill', {
		theme: 'snow',
		modules: {
		toolbar: [
			[{ header: [1, 2, 3, 4, 5, 6, false] }],
			[{ font: [] }],
			["bold", "italic", "underline"],
			["link", "blockquote", "code-block", "image"],
			[{ list: "ordered" }, { list: "bullet" }],
			[{ script: "sub" }, { script: "super" }],
			[{ color: [] }, { background: [] }],
		]
		},
	});
	var form = $('form');
	form.onsubmit = function() {
	// Populate hidden form on submit
	var about = $('inputQuill');
	about.value = JSON.stringify(quill.getContents());
	
	console.log("Submitted", $(form).serialize(), $(form).serializeArray());
	
	// No back end to actually submit to!
	alert('Open the console to see the submit data!')
	return false;
	};
	
	$('.submit-btn').on('click', function(){
		window.location.href="http://127.0.0.1:8000/articleDash";
		console.log('lllll')
	})

}
</script>
<script src="../js/slide.js"></script>
<script src="../js/pagination.js"></script>
</html>