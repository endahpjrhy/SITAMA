@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Hasil Projek</div>
            <div class="card-body">
              <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($success = Session::get('success'))
                                <div class="alert alert-success" role="alert">{{ $success }}</div>
                        @endif
                      </div>
                    </div>
                <form action="/bidang" method="post" enctype="multipart/form-data" >
                  @csrf
                    <div class="row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                      <select class="form-select" id="induk" name="induk" >
                        <option value="" selected>Pilih Bidang</option>
                        @foreach ($bidang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                            
                        @endforeach
                        

                </select>
                    </div>
                </div>
                
              <div class="row mb-4">
                <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
                

                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>

              </form>
              <div class="mt-3">
                <p><i>Daftar Bidang :</i></p>
                <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                    <th scope="col">No.</th>
                    <th scope="col">Nama Bidang</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Induk</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>

                    </tr>
                </thead>
                <tbody>
                  @php
                      $no=0;
                  @endphp
                 @foreach ($daftarbidang as $item)
                 @php
                     $no++;
                 @endphp
                     <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nama}}</td>
                    
                    <td>
                      @if ($item->status == "1")
                          Bidang
                          
                      @else
                          Sub Bidang
                      @endif
                    </td>
                  <td>
                    @if ($item->status == "1")
                    -
                    @else
                    {{$item->nama}}
                    @endif
                  </td>
                  <td>
                  <a href="{{route('bidang.edit', ['bidang'=>$item->id])}}" class="button btn btn-warning">Edit</a>

                  </td>
                <td>
                  <form action="{{route('bidang.destroy', ['bidang'=>$item->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn button btn-danger">Hapus</button>
                  </form>

                </td>
                     </tr>
                 @endforeach
                </table>
              </div>
            </div>

            
          </div>
@endsection