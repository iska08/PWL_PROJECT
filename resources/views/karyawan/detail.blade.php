<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTEM INFORMASI LAUNDRY</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery3.4.1.slim.min.js" integrity="sha384-6J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="container mt-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="card" style="width: 24rem;">
                            <div class="card-header">
                                <center>
                                    <b>Detail Karyawan</b>
                                </center>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <pre>
                                        <li class="list-group-item"><b>Nama             : </b>{{ $karyawan->nama }}</li>
                                        <li class="list-group-item"><b>Jenis Kelamin    : </b>{{ $karyawan->jenisKelamin }}</li>
                                        <li class="list-group-item"><b>Jabatan          : </b>{{ $karyawan->jabatan }}</li>
                                        <li class="list-group-item"><b>Email            : </b>{{ $karyawan->email }}</li>
                                    </pre>
                                </ul>
                            </div>
                            <a class="btn btn-success mt-3" href="{{ route('karyawan.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>