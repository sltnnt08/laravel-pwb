@extends('template.master')

@section('web-title','Add Movie')
@section('content-title', 'Add Your Movie Here!')

@push('css')
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('content')

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Movie</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('movie.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieName">Movie Name</label><br>
                      <input type="text" class="form-control" id="movieName" name="title" placeholder="Enter Movie Name..." value="{{old('title')}}">
                      @error('title')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="MovieYear">Movie Year</label><br>
                      <input type="number" class="form-control" id="MovieYear" name="year" placeholder="Enter Movie Year..." value="{{old('year')}}">
                      @error('year')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="movieGenre">Movie Genre</label><br>
                      <select class="form-control" id="movieGenre" name="genre_id" placeholder="Choose Movie Genre..." value="{{old('genre_id')}}" required>
                        @foreach ($genres as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                      </select>
                      @error('genre')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="movieSynopsis">Synopsis</label><br>
                      <textarea class="form-control" id="movieSynopsis" name="synopsis" placeholder="Enter Movie Synopsis..." style="resize: none; width: 100%; height: 20vh;" value="{{old('synopsis')}}"></textarea>
                      @error('synopsis')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    {{-- <div class="form-group">
                      <label for="MoviePoster">Movie Poster</label><br>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input @error('poster') is-invalid @enderror" id="moviePoster" name="poster">
                          <label for="moviePoster" class="custom-file-label">Upload</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
              </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
<!-- /.content -->
@endsection

@push('js')
    <script src="{{asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../../plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('../../plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('../../plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
      $(document).ready(function () { 
        bsCustomFileInput.Init();
       })
    </script>
@endpush