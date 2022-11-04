@extends('head')
@section('namira')
<style type="text/css">
    ul, li {
        list-style: none;
    }

    #wrapper {
        width: 900px;
        margin: 20px auto;
    }

    .data-container {
        margin-top: 20px;
    }

    .data-container ul {
        padding: 0;
        margin: 0;
    }

    .data-container li {
        margin-bottom: 5px;
        padding: 5px 10px;
        background: #eee;
        color: #666;
    }
</style>
<div class="dashboard">
    <div class="menu-dashboard">
        <div class="anak-dashboard">
            <a href="dashboard" class="d-flex">
                <div class="a-href a-h1 ">
                    <i class='bx bxs-purchase-tag'></i>
                </div>
            </a>
            <a href="articleDash" class="d-flex">
                <div class="a-href a-h2 ">
                     <i class='bx bxs-news'></i>
                </div></a>
            <a href="messegeDash" class="d-flex">
                <div class="messegeDash a-href a-h3 a-href-aktif">
                     <i class='bx bxs-message-dots'></i>
                </div></a>
            </a>
            <a href="#Logout" class="d-flex">
                <div class="a-href bg-success">
                     <i class='bx bx-log-out'></i>
                </div></a>
            </a>
        </div>
    </div>
    <div class="kontak align-items-center  flex-column d-flex" id="kontak" >
        <h1>Pesan</h1>
        <br>
        <table id="tableMessege" class="display" style="width:fit-content">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Url</th>
                </tr>
            </thead>
        </table>
        {{-- <div id="pagination-demo2" class="barbar"></div>
        <div class="berita" id="berita">
            {{-- loop 
            <div class="data-container isiberita"></div>
            {{-- endloop 
        </div> --}}
    </div>
</div>
@endsection
