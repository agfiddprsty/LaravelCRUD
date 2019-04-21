@include('header')
<div class="container">
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="post">
    {{ csrf_field() }}
        <span>Judul Buku</span><br>
        <input type="text" name="judul" required="required"> <br/>
        <br>
        <span>Penerbit</span><br>
        <input type="text" name="penerbit" required="required"> <br/>
        <br>
        <span>Tahun Terbit</span><br>
        <input type="text" name="tahun_terbit" required="required"> <br/>
        <br>
        <span>Pengarang</span> <br>
        <input type="text" name="pengarang" required="required"> <br/><br/>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
        <a href="/" class="btn btn-outline-danger"> Kembali</a><br/>
    </form>
</div>
@include('footer')