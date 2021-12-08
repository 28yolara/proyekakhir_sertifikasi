<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
    </style>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SMAN 1 PEKANBARU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
        <br></br>
            <div class="container">
                @if(session('sukses'))
            <div class="alert alert-info" role="alert">
                {{session('sukses')}}  
            </div>
            @endif

        <div class="container">
        <div class="row">       
        <h1>EDIT DATA SISWA</h1>
            <div class="col-5" >
            <br></br>
                        <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap Siswa Disini" value="{{$siswa->nama_lengkap}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Umur</label>
                                <input name="umur" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Umur Siswa Disini" value="{{$siswa->umur}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin"class="form-select" aria-label="Default select example">
                                <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki Laki</option>
                                <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Golongan Darah</label>
                                <input name="golongan_darah" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Golongan Darah Siswa Disini"  value="{{$siswa->golongan_darah}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Agama</label>
                                <select name="agama" class="form-select" aria-label="Default select example">
                                <option selected>Islam</option>
                                <option value="KP" @if($siswa->jenis_kelamin == 'KP') selected @endif>Kristen Protestan</option>
                                <option value="KK" @if($siswa->jenis_kelamin == 'KK') selected @endif>Kristen Khatolik</option>
                                <option value="H" @if($siswa->jenis_kelamin == 'H') selected @endif>Hindu</option>
                                <option value="B" @if($siswa->jenis_kelamin == 'B') selected @endif>Budha</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampTextArea1" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="formGroupExampTextArea1" placeholder="Masukkan Alamat Siswa Disini"  >{{$siswa->alamat}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleImage2" class="form-label">Foto</label>
                                <input type="file" name="foto" value="{{$siswa->foto}}">
                                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                </div>			
                             <button type="submit" class="btn btn-primary btn btn-warning">Update</button>   
                    </div>
                        
                     </form>
                    </div>
                </div>
            </div>
            </div>
            
             
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>
