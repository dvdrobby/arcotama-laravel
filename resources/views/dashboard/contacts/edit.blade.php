@extends('dashboard.layouts.main')

@push('head')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Edit Contact</h5>
    </div>
    <div class="card-body">
      <form method="post" action="/dashboard/contact/{{ $contact->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $contact->name) }}">
          @error('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="address">Address</label>
          <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address', $contact->address)}}">
          @error('address')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $contact->email)}}">
          @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="phone">Phone</label>
          <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $contact->phone)}}">
          @error('phone')
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