@extends('head')
@section('namira')
<div class="kontak-menu detect-kontak d-flex justify-content-center align-content-center">
    <div class="k-left d-flex justify-content-center align-content-center flex-column p-4">
        <h1>Contact US</h1>
        <h2>HOW WE CAN HELP YOU</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nisi ducimus nostrum alias fugiat incidunt, voluptas consectetur. Itaque voluptatibus ducimus commodi tempore ea, cum voluptate, quaerat pariatur quos nam quis alias! Dicta atque doloremque velit possimus iure aperiam repellat beatae!</p>
        <h2>OUR MEDIA</h2>
        <p>
            Namirahotelindonesia ( Instagram ) <br>
            Namira Hotel ( Facebook ) <br>
            Namirahotel@Gmail.Com ( Email ) <br>
            0829372917293 (<a target="_blank" href="https://wa.me/62829372917293?text=Hallo, kita mau pesan hotel">Support To Whatsapp</a>) <br>
        </p>
        <br>
        <p>Our Location : Jl . Surabaya Barat No 25 B99, Surabaya, Jawa Timur, Indonesia</p>
    </div>
    <div class="k-right d-flex flex-column p-5">
        <form action="{{url('/contact')}}" method="post">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="body-mess rounded-5 shadow p-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Achmad" name="nama">
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="0812345678" name="phone">
                    <label for="floatingInput">Telepon</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Title" name="title">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Subject" name="subject">
                    <label for="floatingInput">Subject</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control mb-3" placeholder="Isi pesan disini..." id="floatingTextarea" style="height:100px" name="body"></textarea>
                    <label for="floatingTextarea">Isi Pesan</label>
                </div>
                <button type="submit" class="btn btn-warning w-100">KIRIM</button>
            </div>
        </form>
    </div>
    {{-- <form action="" class="d-none">
        <input type="text" id="email" name="email" placeholder="email">
        <input type="text" id="subjek" name="subjek" placeholder="subjek">
        <input type="text" id="body" name="isi" id="" placeholder="isi">
        <button type="submit">Kirim</button>
    </form> --}}
</div>
@endsection