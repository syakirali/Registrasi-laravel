<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="gambar/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/registrasi.css" rel="stylesheet">

    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Daftar - Pendaftaran Mahasiswa Baru Universitas Airlangga</title>
  </head>
  <body>
    <div class="row text-white" style="background-color:#c12e3c">
      <div class="container col-md-6 col-sm-12 cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <a href="/">
              <h3 class="masthead-brand">PMB Universitas Airlangga</h3>
            </a>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="/">Beranda</a>
              <a class="nav-link" href="/registrasi">Registrasi</a>
              <a class="nav-link active" href="/tampil">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class="container col-md-12 col-sm-12">
      <div class="containerku my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-gray pb-2 mb-3" style="border-bottom: 1px solid #c12e3c">Data Pendaftar</h6>
        <div class="form-group row p-3" style="font-size:0.875rem">
          <table id="tabel-ppmb" class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">#</th>
                <th scope="col">No. Seluler</th>
                <th scope="col">Email</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pilihan I</th>
                <th scope="col">Pilihan II</th>
                <th scope="col">Pilihan III</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pendaftar as $p)
              <tr>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->asal_sekolah }}</td>
                <td>{{ $p->jenis_kelamin == 'l' ? 'Laki-laki' : 'Perempuan'}}</td>
                <td>{{ $p->no_seluler }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->agama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->prodi1()->get()->first()->nama }}</td>
                <td>{{ $p->prodi2()->get()->first()->nama }}</td>
                <td>{{ $p->prodi3()->get()->first()->nama }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class="mastfoot mt-auto">
      <div class="container">
        <div class="inner">
          <p>&copy; 2018 <a href="http://si.fst.unair.ac.id">S1 Sistem Informasi Universitas Airlangga</a></p>
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#tabel-ppmb').DataTable();
    });
    </script>
  </body>
</html>
