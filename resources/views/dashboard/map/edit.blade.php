@extends('dashboard.layouts.main')

@push('head')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Edit Google Maps Link </h5>
    </div>
    <div class="card-body">
      <form method="post" action="/dashboard/map/{{ $maps->id }}">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon11">URL</span>
          <textarea type="text" name='links' id="links" class="form-control @error('links') is-invalid @enderror">{{ old('links', $maps->links) }}</textarea>
          @error('links')
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