<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

            <nav class="navbar navbar-dark bg-dark">cd 
                <div class="container-fluid">
            <a class="navbar-brand" href="#">SMA NEGRI 1 YOGYAKARTA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
        </div>
          </nav>
        <br></br>
            <figure class="text-center">
            <blockquote class="blockquote">
                <h1>DATA SISWA</h1>
            </blockquote>
            </figure>
            <div class="container">
                @if(session('sukses'))
            <div class="alert alert-info" role="alert">
                {{session('sukses')}}  
            </div>
            @endif

        <br></br>
        
        <div class="row">
           <div class="text-center">
           <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Siswa
                </button>
        </div>
        <br></br>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap Siswa Disini">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Umur</label>
                                <input name="umur" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Umur Siswa Disini">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin"class="form-select" aria-label="Default select example">
                                <option selected>Laki Laki</option>
                                <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Golongan Darah</label>
                                <input name="golongan_darah" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Golongan Darah Siswa Disini">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Agama</label>
                                <select name="agama" class="form-select" aria-label="Default select example">
                                <option selected>Islam</option>
                                <option value="KP">Kristen Protestan</option>
                                <option value="KK">Kristen Khatolik</option>
                                <option value="H">Hindu</option>
                                <option value="B">Budha</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampTextArea1" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="formGroupExampTextArea1" placeholder="Masukkan Alamat Siswa Disini"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleImage2" class="form-label">Foto</label>
                                <input type="file" name="foto" required="required">
                                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                </div>			
                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                     </form>
                    </div>
                </div>
            </div>
            </div>
            
            <table class="table table-hover">
                <tr>
                    <th>NAMA LENGKAP</th>
                    <th>UMUR</th>
                    <th>JENIS KELAMIN</th>
                    <th>GOLONGAN DARAH</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
                @foreach($biodata_Siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama_lengkap}}</td>
                    <td>{{$siswa->umur}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->golongan_darah}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->foto}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>
