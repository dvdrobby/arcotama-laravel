@extends('dashboard.layouts.main')

@push('head')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Edit Social Media Link</h5>
    </div>
    <div class="card-body">
      <form method="post" action="/dashboard/social/{{ $social->id }}">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
          <span class="input-group-text col-lg-4" id="basic-addon11">https://www.facebook.com/</span>
          <input type="text" name='facebook' id="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook', $social->facebook) }}">
          @error('facebook')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text col-lg-4" id="basic-addon11">https://www.twitter.com/</span>
          <input type="text" name='twitter' id="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter', $social->twitter) }}">
          @error('twitter')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text col-lg-4" id="basic-addon11">https://www.instagram.com/</span>
          <input type="text" name='instagram' id="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram', $social->instagram) }}">
          @error('instagram')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text col-lg-4" id="basic-addon11">https://www.linkedin.com/</span>
          <input type="text" name='linkedin' id="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old('linkedin', $social->linkedin) }}">
          @error('linkedin')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3 d-flex">
          <span class="input-group-text col-lg-4" id="basic-addon11">https://www.youtube.com/</span>
          <input type="text" name='youtube' id="youtube" class="form-control @error('youtube') is-invalid @enderror" value="{{ old('youtube', $social->youtube) }}">
          @error('youtube')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
</div>
</div>

@endsection