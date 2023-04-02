      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/dashboard">
            <i class="nav-icon cil-speedometer"></i>
Dashboard</a></li>
@if (user('role') == 2)
    
<li class="nav-item"><a class="nav-link" href="/form-magang">
            <i class="nav-icon cil-briefcase"></i>
Form Pendaftaran</a></li>
<li class="nav-item"><a class="nav-link" href="/status_pengajuan">
            <i class="nav-icon cil-briefcase"></i>
Status Pengajuan</a></li>
<li class="nav-item"><a class="nav-link" href="/hasil_projek">
            <i class="nav-icon cil-briefcase"></i>
Hasil Projek</a></li>
@endif
@if (user('role') == 1)

<li class="nav-item"><a class="nav-link" href="/grafik">
            <i class="nav-icon cil-briefcase"></i>
Grafik Pendaftaran</a></li>
<li class="nav-item"><a class="nav-link" href="/data_peserta">
            <i class="nav-icon cil-briefcase"></i>
Data Peserta Magang</a></li>
<li class="nav-item"><a class="nav-link" href="/daftarhasilprojek">
      <i class="nav-icon cil-briefcase"></i>
Hasil Projek</a></li>
<li class="nav-item"><a class="nav-link" href="/bidang">
      <i class="nav-icon cil-briefcase"></i>
Bidang</a></li>

      </ul>
@endif
