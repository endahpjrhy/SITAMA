@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Form Pendaftaran Magang</div>
            <div class="card-body">
                @if ($data->status==NULL)
                    
                
              <p>Siapkan data-data anda.</p>
              <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                             @endforeach
                                                
                        @endif
                      </div>
                    </div>
              <form action="/prosesdaftarmagang" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="{{$data->nim}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" >
                        <option selected>Pilih Jenis Kelamin</option>
                        @for ($i = 0; $i < count(kelamin()); $i++)
                        
                        <option value="{{kelamin()[$i]}}">{{kelamin()[$i]}}</option>
                        
                        @endfor

                </select>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">Universitas/sekolah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="universitas" name="universitas" value="{{$data->universitas}}" required>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" required>{{$data->alamat}}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="semester" class="col-sm-2 col-form-label">Semester/kelas</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="semester" name="semester" value="{{$data->semester}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$data->jurusan}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bidang_induk" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="bidang_induk" onchange="tampilnosubbidang(this.value)">
                        <option selected>Pilih Bidang</option>
                        @foreach ($bidang as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="bidang_id" class="col-sm-2 col-form-label">Sub Bidang</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="bidang_id" name="bidang_id" >
                            <option selected>Pilih Sub Bidang</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="periode_masuk" class="col-sm-2 col-form-label">Periode Masuk</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="periode_masuk" name="periode_masuk" value="{{$data->periode_masuk}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="periode_keluar" class="col-sm-2 col-form-label">Periode Keluar</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="periode_keluar" name="periode_keluar" value="{{$data->periode_keluar}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telp" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" name="telp" value="{{$data->telp}}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="file_pengantar" class="col-sm-2 col-form-label">Surat Pengantar</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" id="file_pengantar" name="file_pengantar" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>

            </form>
            @else
                <h5 class="p-5 text-center">Anda sudah terdaftar, Silahkan cek status pengajuan secara berkala</h5>    
            @endif
            </div>
          </div>
@endsection

@section('footer')
<script src="/assets/js/jquery-3.1.0.js"></script>
<script>
    function tampilnosubbidang(data) {
        $.ajax({
            type: "get",
            data: {
                "induk": data
            },
            url: "/ndeloksubbidang",
            success: function(hasile) {
                $("#bidang_id").html(hasile);
            }
        })
    }
</script>
@endsection