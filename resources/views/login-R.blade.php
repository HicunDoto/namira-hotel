@extends('head')
<form action="">
    <div class="kotak-login d-flex flex-column align-items-center justify-content-center">
        <img src="{{asset('gambar/logo-area-1.png')}}" class="logo-login mb-4">
        <div class="kotak-rounded d-flex flex-column align-items-center text-center">
            <h1 class="text-white mb-3">Login Admin</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input type="password" class="form-control pswd" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="form-check text-white" style="width:100%;text-align:left">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="">
                    Lihat Password
                </label>
            </div>
            <a href=""><button class="btn btn-warning mt-3" type="submit">Login</button></a>
        </div>
    </div>
</form>
<script>

</script>