@extends('layouts.main')

@section('content')
    <h1>PROFILE</h1>
    <P>
        Nama : {{ $name }} <br>
        NIM : {{ $nim }} <br>
        Prodi : {{ $prodi }} <br>
    </P>
    <img> src="images/" </img>
@endsection