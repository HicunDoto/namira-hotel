<html>
    <div id="promo">
        <h3>PROMO</h3>
        @foreach ($promos as $promo)
            Hello, {{ $promo->namaPromo }} - {{ $promo->judulPromo }} - {{ $promo->keteranganPromo }} - {{ $promo->fotoPromo }} <br />
        @endforeach
    </div>
    <div id="article">
        <h3>ARTICLE</h3>
        @foreach ($articles as $article)
            Hello, {{ $article->judulArticle }} - {{ $article->tglTerbit }} - {{ $article->keterangan }} - {{ $article->fotoAticle }} <br />
        @endforeach
    </div>
    <div id="contact">
        <h3>CONTACT</h3>
        @foreach ($contacts as $contact)
            Hello, {{ $contact->namaContact }} - {{ $contact->subject }} - {{ $contact->no_telp }} - {{ $contact->email }} - {{ $contact->keteranganContact }} <br />
        @endforeach
    </div>
</html>