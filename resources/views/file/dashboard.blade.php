@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-body">

    <h6>Selamat Datang {{ strtoupper(user('nama'))}} </h6>
</div>

</div>
@endsection