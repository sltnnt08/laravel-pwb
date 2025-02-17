@extends('template.master');

@section('content-title', 'Edit Data Genre')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="mx-4 card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Genre</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('genre.update', $genres->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama Genre</label>
            <input name="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"  placeholder="Nama Genre" value="{{ $genres->name }}">
          </div>
          @error('name')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-secondary">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
