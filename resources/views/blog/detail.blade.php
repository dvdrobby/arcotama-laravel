@extends('blog.layouts.main')

@section('content')
<section class="py-5 mb-5" 

@if($post->image)
  style="background-image: url(/storage/{{ $post->image }});">
@else  
  style="background-image: url(https://source.unsplash.com/1200x400/?abstract);">
@endif

    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="d-flex flex-column text-center">
            <h1 class="mt-5 text-light">{{ $post->title }}</h1>
            <div class="d-flex align-items-center justify-content-center text-center text-light">
              <p class="popular-post-date text-light px-3">By Admin</p>
              <p class="popular-post-date text-light">&nbsp;-&nbsp;{{ $post->created_at->toFormattedDateString()}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="popular-post-date">
            {!! $post->body !!}
          </div>

      </div>
      <div class="col-lg-4 sidebar">

        <div class="sidebar-box search-form-wrap mb-4">
          <form action="#" class="sidebar-search-form">
            <span class="bi-search"></span>
            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
          </form>
        </div>
        <!-- END sidebar-box -->
        <div class="sidebar-box">
          <h5 class="heading">Latest Posts</h5>
          <div class="post-entry-sidebar">
            <ul class="nav row">

              @foreach ($latest as $item )
                <li class="nav-item">
                  <a class="nav-link d-flex" href="/blog/{{ $item->slug }}">
                    <img style="width:100px; height:auto;" 
                    @if ($item->image)
                      src="{{ '/storage/' . $item->image }}" alt="Image placeholder" class="me-4 rounded">                      
                    @else
                      src="https://source.unsplash.com/1200x800/?abstract" alt="Image placeholder" class="me-4 rounded">
                    @endif
                    <div class="text flex-column">
                      <p class="popular-post-title">{{ $item->title }}</p>
                      <div class="post-meta">
                        <span class="mr-2 popular-post-date ">{{ $item->created_at->toFormattedDateString() }}</span>
                      </div>
                    </div>
                  </a>
                </li>
                
              @endforeach              
            </ul>
          </div>
        </div>
        <!-- END sidebar-box -->
    </div>
  </section>


  <!-- Start posts-entry -->
  <section class="bg-light mt-5 py-5">
    <div class="container">
      <div class="row mb-4">
        <h5 class="heading">More Blog Posts</h5>
      </div>
      <div class="row">

        @foreach ($posts as $p)
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="/blog/{{ $p->slug }}" class="img-link">
                @if ($p->image)
                  <img src="{{ '/storage/'.$p->image }}" alt="Image" class="img-fluid rounded-3">                  
                @else
                  <img src="https://source.unsplash.com/1200x400/?abstract" alt="Image" class="img-fluid rounded-3"> 
                @endif
              </a>
              <span class="popular-post-date">{{ $p->created_at->toFormattedDateString() }}</span>
              <p class="popular-post-title"><a href="/blog/{{ $p->slug }}">{{ Str::limit( $p->title, 45, '...' ) }}</a></p>
              <p class="popular-post-date mb-5">{{ Str::limit(strip_tags($p->body), 75, '...') }}</p>
              <p><a href="/blog/{{ $p->slug }}" class="bg-danger p-3 text-light rounded-3">Continue Reading</a></p>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  </section>
  <!-- End posts-entry -->

@endsection