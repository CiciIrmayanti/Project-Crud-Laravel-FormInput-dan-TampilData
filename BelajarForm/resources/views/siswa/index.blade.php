<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>
    <div class="container bg-white pt-4">
        <h1 align="center">Form Pendaftaran Siswa</h1>
        <hr>
        <div class="col-md-8">
            <form action="{{ url('/siswa') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nis">NIS</label>
                    @error('nis')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="nis" class="form-control" id="nis">
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    @error('nama_siswa')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    @error('tgl_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    @error('jurusan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="MM">Multimedia</option>
                        <option value="TKJ">Tekhnik Komputer Jaringan</option>
                        <option value="TEI">Tekhnik Elektronika Industri</option>
                        <option value="BC">Broadcasting</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nohp">Nomor Hp</label>
                    @error('nomor_hp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="nomor_hp" class="form-control" id="nohp">
                </div>
                <button type="submit" name="daftar" id="daftar" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
