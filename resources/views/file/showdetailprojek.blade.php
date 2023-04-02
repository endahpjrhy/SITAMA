@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Hasil Projek</div>
            <div class="card-body">
              
                
                    <div class="row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Peserta</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$data->nama}}" disabled>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="judul" class="col-sm-2 col-form-label">Universitas/sekolah Asal</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$data->universitas}}" disabled>
                    </div>
                </div>

              
              <div class="mt-3">
                <p><i>Daftar Projek :</i></p>
                <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                    <th scope="col">No.</th>
                    <th scope="col">Nama Projek</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Link Projek</th>

                    <th scope="col">Lampiran</th>
                    <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                      $no=0;
                  @endphp
                  @foreach ($riwayat as $item)
                  @php
                      $no++;
                      $judul = $item->judul;
                      $desc = $item->desc;
                      $link = $item->link;

                      $file = '/lampiran/projek/'.$item->file_name;
                      $tgl = tgl_indo_c($item->created_date);

                  @endphp
                    <tr>
                    <td scope="row">{{$no}}</td>
                    <td>{{$judul}}</td>
                    <td>{{$desc}}</td>
                    <td align="center">
                        @if ($link == NULL)
                           - 
                        @else
                        <a href="{{$link}}" target="_blank">
                            <i class="icon cil-link"></i>
                        </a>
                        @endif

                    </td>
                    <td><a href="{{$file}}" target="_blank">Lihat Lampiran</a></td>
                    <td>{{$tgl}}</td>

                    </tr>
                  @endforeach
                </table>
              </div>
            </div>

            
          </div>
@endsection