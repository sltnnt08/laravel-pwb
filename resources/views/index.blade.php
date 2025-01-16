<!DOCTYPE html>
<html lang="id">
    <head>
        <eta charset="utf-8"/>
        <meta tag="media online pelajar"/>
        {{-- <title>Media Online</title> --}}
    </head>
    <body>
        {{-- <h1>Media Online</h1>
        <h3>Sosial Media Developer</h3>
            <p>Belajar dan berbagi agar hidup menjadi lebih baik.</p>
        <h3>Benefit Join di Media Online</h3> 
            <ul>
                <li>Mendapatkan motivasi sesama para </li>
                <li>Sharing knowledge</li>
                <li>Dibuat oleh calon web developer terbaik</li>
            </ul>
        <h3>Cara Bergabung ke Media Online</h3>
            <ol>
                <li>Mengujungi Website ini</li>
                <li>Mendaftarkan di <a href="/form">Form Sign Up</a></li>
                <li>Selesai</li>
            </ol> --}}
    @extends('template.master')
    @section('web-title','Add Movies')

    @section('content-title', 'Add Your Favourite Movies Here!')
    
    @section('content')
        @section('form-title-Movies', 'Movies')
        @include('template.separate.formMovies')
        @section('form-title-Genres','Genre')    
        @include('template.separate.formGenres') 
    @endsection
    </body>
</html>