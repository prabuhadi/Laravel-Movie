@extends('layout.master')

@section('title')
    Welcome
@endsection

@section('judul1')
    Welcome Our Next SanberCode!
@endsection

@section('judul2')
    Cheers!
@endsection

@section('content')
<head>
    <title>Welcome | SanberBook</title>
</head>
<body>
    <h1>Selamat Datang {{$firstName}} {{$lastName}}!</h1>
    <h3>Terima Kasih, kamu telah resmi bergabung di SanberBook. Social Media kita bersama!</h3>
</body>
    
@endsection