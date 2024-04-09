@extends('dashboard.layouts.main')

@push('head')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Edit About</h5>
    </div>
    <div class="card-body">
      <form method="post" action="/dashboard/about/{{ $about->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
       
        <div class="mb-3">
            <label for="formFile" class="form-label" >About Section Image</label></br>
            <input name="oldImage" type="hidden" value="{{$about->image}}">

            @if ($about->image)
              <img src="{{ '/storage/' . $about->image }}" class='img-preview img-fluid d-block col-md-5 rounded-3 mb-3'>
            @else
              <img class='img-preview img-fluid d-block col-md-5 rounded-3 mb-3'>  
            @endif

            {{-- <small class="text-muted">*leave it blank or upload an image with 1200x400 px</small> --}}
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name='image' onchange="imgPreview()">
            @error('image')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label" for="editor">About</label>
          <textarea id="editor" class="form-control"  name="about">{{old('about', $about->about)}}</textarea>
          @error('about')
              <div class="invalid-feedback">
                {{ $message}}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
</div>
</div>

@push('js')
    <script>
        var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace( 'editor' , options);
    </script>

    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/posts/createSlug?title='+ title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

    </script>
    <script>
      function imgPreview(){
        const image = document.querySelector('#image');
        const preview = document.querySelector('.img-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          preview.src = oFREvent.target.result;
        }
      }
    </script>
@endpush
@endsection