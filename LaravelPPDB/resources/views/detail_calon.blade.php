<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

</style>
<body>
    <div class="container-fluid bg-white pt-5">
    <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">Form Data Calon Siswa {{$calonsiswa->nama}}</h1>
                <h6 class="mb-4">SMK Taruna Bhakti Depok</h6>
                
        <tr>
            <td>Nomor PPDB</td>
            <td>Nama</td>
            <td>Asal Sekolah</td>
            <td>Pilihan 1</td>
            <td>Pilihan 2</td>
            <td>Alamat</td>
            <td>Nomor Handphone</td>
        </tr>
        <tr>
            <td>{{$calonsiswa->noppdb}}</td>
            <td>{{$calonsiswa->nama}}</td>
            <td>{{$calonsiswa->asal_sekolah}}</td>
            <td>{{$calonsiswa->pilihan1}}</td>
            <td>{{ $calonsiswa->pilihan2 }}</td>
            <td>{{$calonsiswa->alamat}}</td>
            <td>{{$calonsiswa->nohp}}</td>
        </tr>
                    <!-- <div class="from-group">
                            <label for="noppdb">Nomor PPDB</label>
                           <div>{{$calonsiswa->noppdb}}</div>

                    <div class="from-group">
                            <label for="nama">Nama</label>
                            <div>{{$calonsiswa->nama}}</div>

                    <div class="from-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <div>{{$calonsiswa->asal_sekolah}}</div>

                    <div class="from-group">
                            <label for="pilihan1">Pilihan 1</label>
                            <div>{{$calonsiswa->pilihan1}}</div>

                    <div class="from-group">
                            <label for="pilihan2">Pilihan 2</label>
                            <div>{{$calonsiswa->pilihan2}}</div>

                    <div class="from-group">
                            <label for="alamat">Alamat</label>
                            <div>{{$calonsiswa->alamat}}</div>
                    <div class="from-group">
                            <label for="nohp">Nomor Hp</label>
                            <div>{{$calonsiswa->nohp}}</div> -->
                
            </div>
        </div>
        </table>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
