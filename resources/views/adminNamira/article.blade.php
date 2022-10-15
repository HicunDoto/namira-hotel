<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARTICLE</title>
</head>
<body>
    <div id="article">
        <h3>ARTICLE</h3>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong> <strong>{{ Session::get('status') }}</strong>
        </div>
    @endif
    @if ($message = Session::get('status'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <button><a href="createArticle">BUAT PROMO</a></button><br>
        @foreach ($articles as $article)
            Hello, {{ $article->judulArticle }} - {{ date('d-m-Y',strtotime($article->tglTerbit)) }} - {{ $article->keterangan }} - <img src="{{ asset('storage/'.$article->fotoArticle) }}" width="50" height="50" alt=""> - <a href="/adminnamira/{{$article->id}}/editArticle" name="edit">EDIT</a> - <form action="/adminnamira/article/{{$article->id}}" method="post"> @csrf <button type="submit">Hapus</button></form><br />
        @endforeach
    </div>
</body>
</html>