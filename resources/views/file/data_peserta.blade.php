@extends('layouts.app')
@section('content')
    	<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">

<div class="card mb-4">
    
            <div class="card-header">Data Peserta Magang</div>
            

            <div class="card-body">
                <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($success = Session::get('success'))
                                <div class="alert alert-success" role="alert">{{ $success }}</div>
                        @endif
                      </div>
                    </div>
                    <a href="/data_peserta/export"><button class="btn btn-success"><i class="cil-print"></i></button></a>
             <table class="table table-bordered" id="datatable">
                <thead>
                    <tr class="table-success">
                    <th scope="col">No.</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Tgl Masuk</th>
                    <th scope="col">Tgl keluar</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Surat Pengantar</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Status Seleksi</th>
                    <th scope="col">Opsi</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=0;
                    @endphp
                    @foreach ($data as $item)
                    @php
                        $no++;
                        $nama = $item->nama;
                        $alamat = $item->alamat;
                        $periode_masuk = bulanIndonesia($item->periode_masuk);
                        $periode_keluar = bulanIndonesia($item->periode_keluar);
                        $telp = $item->telp;
                        $jenis_kelamin = $item->jenis_kelamin;
                        $universitas = $item->universitas;
                        $jurusan = $item->jurusan;
                        $status = status_terima()[$item->status];
                        $surat = '/lampiran/surat/'.$item->file_pengantar;
                        $photo = '/lampiran/photo/'.$item->photo;
                        $ec= base64_encode($item->id);
                    @endphp
                    <tr>
                    <td scope="row">{{$no}}</td>
                    <td>{{$nama}}</td>
                    <td>{{$periode_masuk}}</td>
                    <td>{{$periode_keluar}}</td>
                    <td>{{$jenis_kelamin}}</td>
                    <td>{{$universitas}}</td>
                    <td>{{$jurusan}}</td>
                    <td><a href="{{$surat}}" target="_blank">Lihat</a></td>
                    <td><a href="{{$photo}}" target="_blank">Lihat</a></td>
                    <td>{{$status}}</td>
                    <td align="center">
                        <a href="/data_peserta/{{$ec}}" target="_blank"><i class="icon cil-info"></i></a>
                        </td>

                    </tr>
                    @endforeach
                   
                
                </tbody>
                </table>
            </div>
          </div>
	<!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
	<script type="text/javascript" src="/assets/js/jquery-3.1.0.js"></script>

	<script type="text/javascript" src="/assets/datatable/datatables.min.js"></script>
	<script type="text/javascript">
    $('#datatable').DataTable({
        processing: true,
        //serverSide: true,
        autoWidth: true,
        responsive: true,
   
        
    });
</script>


@endsection