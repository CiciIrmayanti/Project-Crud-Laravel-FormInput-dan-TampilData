<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row" style="text-align:center">
    <h2 class="mt-4 mb-4 text-center">Table Calon Siswa</h2>
    <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
        <tr>
            <td>No</td>
            <td>Nomor PPDB</td>
            <td>Nama</td>
            <td>Asal Sekolah</td>
            <td>Pilihan 1</td>
            <td>Pilihan 2</td>
            <td>Aksi</td>
        </tr>
        @forelse ($cpdb as $calonsiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $calonsiswa->noppdb }}</td>
            <td>{{ $calonsiswa->nama }}</td>
            <td>{{ $calonsiswa->asal_sekolah }}</td>
            <td>{{ $calonsiswa->pilihan1 }}</td>
            <td>{{ $calonsiswa->pilihan2 }}</td>
            <td><a href="#" class="btn btn-info">Edit</a></td>
        </tr>
        @empty
        <td colspan="7">Tidak Ada Data</td>
        @endforelse
    </table>
    </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
</html>