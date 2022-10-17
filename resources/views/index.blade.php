<html>
    <div id="promo">
        <h3>PROMO</h3>
        @foreach ($promos as $promo)
            Hello, {{ $promo->namaPromo }} - {{ $promo->judulPromo }} - {{ $promo->keteranganPromo }} - <img src="{{ asset('storage/'.$promo->fotoPromo) }}" width="50" height="50" alt=""> <br />
        @endforeach
    </div>
    <div id="article">
        <h3>ARTICLE</h3>
        @foreach ($articles as $article)
            Hello, {{ $article->judulArticle }} - {{date('d-m-Y',strtotime($article->tglTerbit))}} - {{ $article->keterangan }} - <img src="{{ asset('storage/'.$article->fotoArticle) }}" width="50" height="50" alt=""> <br />
        @endforeach
    </div>
    <div id="contact">
        <h3>CONTACT</h3>
        @foreach ($contacts as $contact)
            Hello, {{ $contact->namaContact }} - {{ $contact->subject }} - {{ $contact->no_telp }} - {{ $contact->email }} - {{ $contact->keteranganContact }} <br />
        @endforeach
    </div>
    <form action="" method="post">
        <div id="email">
            <h3>BERI KAMI SARAN/KRITIK MELALUI EMAIL KAMI</h3>
            <div style="padding-bottom: 5px;">
                <input type="email" name="email" id="">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" name="subject" id="">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" name="nama" id="">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" name="keterangan" id="">
            </div>
            <div style="padding-bottom: 5px;">
                <input type="text" name="no_telp" id="">
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</html>