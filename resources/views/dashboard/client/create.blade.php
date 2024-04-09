@extends('dashboard.layouts.main')

@push('head')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Add Client</h5>
    </div>
    <div class="card-body">
      <form method="post" action="{{url('dashboard/client')}}" >
        @csrf
        <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
          @error('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="address">Address</label>
          <input type="text" id="address" class="form-control" name="address" value="{{old('address')}}">
          @error('address')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
</div>
</div>

@endsection