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
                <div class="dashboard a-href a-h1 a-href-aktif">
                    <i class='bx bxs-purchase-tag'></i>
                </div>
            </a>
            <a href="articleDash" class="d-flex">
                <div class="a-href a-h2">
                     <i class='bx bxs-news'></i>
                </div></a>
            <a href="messegeDash" class="d-flex">
                <div class="a-href a-h3">
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
    <div class="promo d-flex align-items-center flex-column" id="promo">
        <h1>Promo</h1>
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
        <div class="input-promo d-flex flex-column ">
            <a href="createPromo"><button class="btn btn-primary my-4">Upload
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M11 15h2V9h3l-4-5-4 5h3z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg></button></a>
            <div class="isi-promo">
                {{-- loop  --}}
                <div class="loop-promo">
                    <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" alt="">
                    <div class="loop-menu">
                        <h2>Name1</h2>
                        <div class="d-flex" style="gap:10px">
                            <a href="editPromo">
                                <button class="btn btn-dark">
                                    <i class='bx bxs-edit'></i>
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="loop-promo">
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" alt="">
                    <div class="loop-menu">
                        <h2>Name2</h2>
                        <div class="d-flex" style="gap:10px">
                            <a href="editPromo">
                                <button class="btn btn-dark">
                                    <i class='bx bxs-edit'></i>
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="loop-promo">
                    <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" alt="">
                    <div class="loop-menu">
                        <h2>Name3</h2>
                        <div class="d-flex" style="gap:10px">
                            <a href="editPromo">
                                <button class="btn btn-dark">
                                    <i class='bx bxs-edit'></i>
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="loop-promo">
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" alt="">
                    <div class="loop-menu">
                        <h2>Name2</h2>
                        <div class="d-flex" style="gap:10px">
                            <a href="editPromo">
                                <button class="btn btn-dark">
                                    <i class='bx bxs-edit'></i>
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="loop-promo">
                    <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" alt="">
                    <div class="loop-menu">
                        <h2>Name3</h2>
                        <div class="d-flex" style="gap:10px">
                            <a href="editPromo">
                                <button class="btn btn-dark">
                                    <i class='bx bxs-edit'></i>
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- endloop  --}}
            </div>
        </div>
    </div>
</div>
@endsection
