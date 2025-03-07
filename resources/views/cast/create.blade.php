@extends('template.master')
@push('css')
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('web-title','Add Movie Casts')
@section('content-title', 'Add Your Favorite Cast Here!')
@section('content')

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('cast.store')}}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieCast">Movie Cast</label><br>
                      <input type="text" class="form-control" id="CastName" name="name" placeholder="Enter Cast Name..." value="{{old('name')}}">
                      @error('name')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="movieCast">Age</label><br>
                      <input type="number" min="0" class="form-control @error('age') {{'is invalid'}} @enderror" id="CastAge" name="age" placeholder="Enter Cast Age..." value="{{old('age')}}">
                      @error('age')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="bioCast">Bio</label><br>
                      <textarea class="form-control @error('bio') {{'is required'}} @enderror" id="CastBio" name="bio" placeholder="Enter Cast Bio..." style="resize: none; width: 100%; height: 20vh;" value="{{old('bio')}}"></textarea>
                      @error('bio')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer ">
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
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.html5.System.Xml.XmlNode, System.String, Boolean)$##6003B97   �    �ʅ  [COLD] System.CodeDom.Compiler.HandlerBase.GetAndRemoveAttribute(System.Xml.XmlNode, System.String, Boolean)$##6003B97    �    �k  System.CodeDom.Compiler.Ha