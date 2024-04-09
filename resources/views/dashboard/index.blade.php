@extends('dashboard.layouts.main')

@section('content')

    <!-- Content -->

    
    <div class="container-xxl flex-grow-1 container-p-y">
      @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
      @endif

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body d-flex justify-content-start row container">
                                <h5 class="card-title text-primary mb-5">Contact Data</h5>
                                <div class="d-flex flex-grow-1 justify-content-start">
                                    <i class='bx bxs-buildings col-sm-2'></i><span class="card-text ml-3">{{$contacts[0]->name}}</span>
                                </div>
                                <div class="d-flex flex-grow-1 justify-content-start">
                                    <i class='bx bxs-map-alt col-sm-2'></i><span class="card-text ml-3">{{$contacts[0]->address}}</span>
                                </div>
                                <div class="d-flex flex-grow-1 justify-content-start">
                                    <i class='bx bx-envelope col-sm-2' ></i><span class="card-text ml-3">{{$contacts[0]->email}}</span>
                                </div>
                                <div class="d-flex flex-grow-1 justify-content-start">
                                    <i class='bx bxs-phone-call col-sm-2' ></i><span class="card-text ml-3">{{$contacts[0]->phone}}</span>
                                </div>

                                <a href="/dashboard/contact/1/edit" class="col-sm-2 btn btn-sm btn-outline-primary mt-5">Edit</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{asset('dashboard/assets/img/illustrations/man-with-laptop-light.png')}}"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Table clients --}}
          <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
              <div class="card">
                  <div class="row row-bordered g-0">
                  <div class="col-md-12">
                      <div class="card">
                          <h5 class="card-header">Client Lists</h5>
                          <div class="table-responsive text-nowrap">
                            <table class="table">
                              <thead class="table-dark">
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Adress</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                @if ($clients->count())
                                @foreach ( $clients as $client )
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->address }}</td>
                                  <td>
                                    <div >
                                      <a class="badge bg-warning" href="/dashboard/client/{{$client->id}}/edit"><i class="bx bx-edit-alt me-1"></i></a>
                                      <form class="d-inline" method="POST" action="/dashboard/client/{{$client->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="border-0 badge bg-danger"  onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i></button>
                                      </form>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                                @endif
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        

            <!-- Table posts -->
        
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Blog Posts</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              @if($posts->count())
                              @foreach ( $posts as $post )
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                  <div >
                                    <a class="badge bg-warning" href="/dashboard/posts/{{$post->slug}}/edit"><i class="bx bx-edit-alt me-1"></i></a>
                                    <form class="d-inline" method="POST" action="/dashboard/posts/{{$post->slug}}">
                                      @method('DELETE')
                                      @csrf
                                      <button class="border-0 badge bg-danger"  onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i></button>
                                    </form>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/ Total Revenue -->
     
    

@endsection