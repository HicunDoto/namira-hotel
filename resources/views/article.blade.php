@extends('head')
@section('namira')
<div class="artikel-menu" style="position: relative">
  <h1>ARTICLE NAMIRA</h1>
  <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam est ut obcaecati.</h2>
  <div class="bg-htm w-100" style="background: black;opacity:0.5;position:absolute;z-index:0; height:100%; top:0;left:0"></div>
</div>

<div class="isi-artikel-menu flex-wrap d-flex justify-content-center gap-4">
  {{-- loop --}}
  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?food" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Rudi</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A vel debitis incidunt.</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?nature" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Rykholis</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quia culpa a perferendis, necessitatibus nisi?</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?drink" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Edi</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sit dolorem laborum illo praesentium modi doloremque officiis maiores alias. Odit.</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?city" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Deta</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet.</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?food" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Rudi</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A vel debitis incidunt.</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?nature" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Rykholis</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quia culpa a perferendis, necessitatibus nisi?</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?drink" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Edi</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sit dolorem laborum illo praesentium modi doloremque officiis maiores alias. Odit.</h2>
    </div>
  </div>

  <div class="card" style="width: 32rem;">
    <img src="https://source.unsplash.com/1600x900/?city" class="card-img-top" alt="...">
    <div class="card-body">
      <p>Creator by Deta</p>
      <h2 class="card-text">Lorem ipsum dolor sit amet.</h2>
    </div>
  </div>

  
  {{-- endloop --}}
</div>
@endsection