@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Form Pendaftaran Magang</div>
            <div class="card-body">
              <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($success = Session::get('success'))
                                <div class="alert alert-success" role="alert">{{ $success }}</div>
                        @endif
                      </div>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                    
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" disabled>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="{{$data->nim}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$data->jenis_kelamin}}" disabled>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">Universitas</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="universitas" name="universitas" value="{{$data->universitas}}" disabled>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" disabled>{{$data->alamat}}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="semester" name="semester" value="{{$data->semester}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$data->jurusan}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$bidang_induk->nama}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Sub Bidang</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$data->bidang->nama}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="periode_masuk" class="col-sm-2 col-form-label">Periode Masuk</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="periode_masuk" name="periode_masuk" value="{{$data->periode_masuk}}" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="periode_keluar" class="col-sm-2 col-form-label">Periode Keluar</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="periode_keluar" name="periode_keluar" value="{{$data->periode_keluar}}" disabled>
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
                    <input type="text" class="form-control" id="telp" name="telp" value="{{$data->telp}}" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="telp" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" name="telp" value="{{status_terima()[$data->status]}}" disabled>
                    </div>
                </div>
    
                    </div>
                    <div class="col-md-4">
                <h5>Ubah Status</h5>
                <form action="/data_peserta/ubahstatus" method="post">
                    @csrf
                    <input type="hidden" class="form-control" id="id" name="id" value="{{$data->id}}">
                    
                <select class="form-select" id="status" name="status" >
                        <option selected>Pilih Status</option>
                        @for ($i = 1; $i <= count(status_terima()); $i++)
                        @if ($i == $data->status)
                        <option value="{{$i}}" selected>{{status_terima()[$i]}}</option>
                        @else
                        <option value="{{$i}}">{{status_terima()[$i]}}</option>
                        @endif
                        
                        @endfor

                </select>
                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>
                </form>
                <h5 class="mt-3">Riwayat</h5>
<table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                    <th scope="col">No.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Update</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                      $no = 0;
                  @endphp
                  @foreach ($riwayat as $item)
                  @php
                      $no++;
                      $status = status_terima()[$item->status];
                      $tgl = tgl_indo_c($item->created_date);

                  @endphp
                    <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{$status}}</td>
                    <td>{{$tgl}}</td>
                    </tr>
                  @endforeach

                </tbody>
                </table>
            </div>    
            </div>

            
            </div>
          </div>
@endsection