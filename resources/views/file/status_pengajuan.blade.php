@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Hasil Pengajuan Magang</div>
            <div class="card-body">
            @if ($data->status != NULL)
            <div class="text-center py-5">
              @if ($data->status == '3')
                <h3 class="text-success">Selamat Pengajuan anda diterima menjadi peserta magang.</h3>
                <h6>Silahkan datang mengambil surat balasan di kantor kami</h6>
              @elseif ($data->status == '4')
                <h3 class="text-danger">Mohon maaf pengajuan anda ditolak.</h3>
                <h6>Jangan berkecil hati, masih ada kesempatan di lain kali</h6>
              @else
                <h3 class="text-warning">Pengajuan anda masih kami tinjau.</h3>
                <h6>Mohon ditunggu data pengajuan anda sudah kami terima dan sedang kami tinjau</h6>
              @endif
              </div>

              <div class="px-5 pb-4">
                <p><i>Riwayat :</i></p>
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
              @else
                  <div class="text-center py-5">
                    <h3>Silahkan isi form pendaftaran magang.</h3>
                  </div>
              @endif
            </div>

          </div>
@endsection