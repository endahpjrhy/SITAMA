@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Edit Bidang</div>
            <div class="card-body">
              <div class="tab-content rounded-bottom">
                <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                  @if ($success = Session::get('success'))
                          <div class="alert alert-success" role="alert">{{ $success }}</div>
                  @endif
                </div>
              </div>
                <form action="{{route('bidang.update', ['bidang'=>$edit->id])}}" method="post" enctype="multipart/form-data" >
                  @csrf
                  @method('PUT')

                    <div class="row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                      <select class="form-select" id="induk" name="induk" >
                        <option value="" selected>Pilih Bidang</option>
                        @foreach ($bidang as $item)
                        @if ($item->id == $edit->id)
                            
                        @else
                            
                        @endif
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                            
                        @endforeach
                        

                </select>
                    </div>
                </div>
                
              <div class="row mb-4">
                <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" required value="{{$edit->nama}}">
                </div>
            </div>
                

                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>

              </form>
              
            </div>

            
          </div>
@endsection