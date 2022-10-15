<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <form action="{{url('/adminnamira/article')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div style="padding-bottom: 5px;">
                <input type="date" placeholder="Tanggal" name="tglTerbit">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Judul" name="judulArticle">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" placeholder="Keterangan" name="keteranganArticle">
            </div>
            <div style="padding-bottom: 5px;">
                <label for="fotoku">Upload Foto</label><br><input id="fotoku" type="file" name="file">   
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>