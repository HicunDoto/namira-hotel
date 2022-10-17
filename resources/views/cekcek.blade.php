@extends('head')
<div class="slide-slide">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{asset('gambar/background-area-1.jpg')}}" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="{{asset('gambar/background-area-1-rooms.jpg')}}" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{asset('gambar/background-area-1-hall.jpg')}}" style="width:100%">
            <div class="text">Caption Three</div>
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
</div>