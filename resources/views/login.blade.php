<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{url('/login34N4mira')}}" method="post">
        @csrf
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div>
            <div style="padding-bottom: 5px;">
                <input type="email" placeholder="Username" name="tglTerbit">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="password" placeholder="Judul" name="judulArticle">
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>