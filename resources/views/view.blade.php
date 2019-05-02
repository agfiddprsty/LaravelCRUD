@include('header')
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">TAHUN TERBIT</th>
                    <th scope="col">PENGARANG</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light text-center">
                    <td>{{$buku->id}}</td>
                    <td>{{$buku->judul}}</td>
                    <td>{{$buku->penerbit}}</td>
                    <td>{{$buku->tahun_terbit}}</td>
                    <td>{{$buku->pengarang}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@include('footer')