    @extends('template.master')
    @section('web-title','Add Movies')

    @section('content-title', 'Add Your Favourite Movies Here!')

    @section('content')
        <!-- Main content -->
        @include('template.separate.formMovies')
        @include('template.separate.formGenres')
        @endsection
        <!-- /.container-fluid -->
    <!-- /.content -->
