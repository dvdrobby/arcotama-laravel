@extends('blog.layouts.main')

@section('content')

  <section id='cta' class="position-relative py-5 mb-5">
    <div class="cta-pattern-overlay pattern-left position-absolute start-0 translate-middle-y">
        <img src="images/cta-pattern.png" alt="pattern">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">Blog</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="section search-result-wrap">
    <div class="container">
      
      <div class="row posts-entry py-3">
        <div class="col-lg-8">
          @if ($posts->count())

            @foreach ($posts as $post)
              <div class="mb-5 d-flex flex-column blog-entry-search-item flex-sm-row">
                <a href="/blog/{{ $post->slug }}" class="img-link me-4">
                  @if ($post->image)
                    <img src="/storage/{{ $post->image }}" alt="Image" class="img-fluid rounded-3" style="max-width: 400px">
                  @else
                    <img src="https://source.unsplash.com/1200x1000/?abstract" alt="Image" class="img-fluid rounded-3" style="max-width: 400px">
                  @endif
                </a>
                <div>
                  <span class="popular-post-date">{{ $post->created_at->toFormattedDateString() }}</span>
                  <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                  <p>{{ Str::limit(strip_tags( $post->body ), 50, '...') }}</p>
                  <p><a href="/blog/{{ $post->slug }}" class="btn btn-sm btn-outline-danger">Read More</a></p>
                </div>
              </div>
            @endforeach
          @else
            <h2>Sorry..there is no post found...</h2>
          @endif
          

        {{-- Pagination --}}

        {{ $posts->links() }}
    

        {{-- End of Pagination --}}

        </div>


        <div class="col-lg-4 sidebar">

          <div class="sidebar-box search-form-wrap mb-4">
            <form action="/blog" class="sidebar-search-form">
              {{-- <span class="bi-search"></span> --}}
              <input type="text" class="form-control" id="search" name='search' placeholder="Type a keyword and hit enter" value="{{ request('search') }}">
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
      </div>
    </div>
  </div>

@endsection