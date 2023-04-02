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
                <form action="/kirimhasilprojek" method="post" enctype="multipart/form-data" >
                  @csrf
                    <div class="row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Projek</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="desc" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="desc" class="form-control" id="desc" rows="5" required></textarea>
                    </div>
                </div>

                <div class="row mb-4">
                  <label for="link" class="col-sm-2 col-form-label">Link projek</label>
                  <div class="col-sm-10">
                      <input name="link" class="form-control" id="link" rows="5" required>
                  </div>
              </div>
                
              <h6>Silahkan upload file projek disini.</h6>
              <input class="form-control form-control-lg" id="formFileLg" type="file" name="file_name" required>
              
                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>

              </form>
              
            </div>

            
          </div>
@endsection