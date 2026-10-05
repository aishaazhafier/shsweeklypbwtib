@extends('layouts.main')

@section('content')
    <h1>PROFILE</h1>
    <P>
        Nama : {{ $name }} <br>
        NIM : {{ $nim }} <br>
        Prodi : {{ $prodi }} <br>
    </P>
    <img src="{{ asset('images/hirono2.png') }}" alt="Foto Profile" width="200">
    <script src="js/alert.js"></script>
@endsection