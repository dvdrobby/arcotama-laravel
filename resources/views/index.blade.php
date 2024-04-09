@extends('layouts.main')

@section('content')
    <section id="home" class="position-relative overflow-hidden py-4" style="background: url(images/banner-main.jpg);">     
        <div class="container py-5 mt-5">
            <div class="row align-items-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h6 class="text-white">QUALITY WATER TREATMENT SOLUTIONS</h6>
                    <h2  class="text-white fw-bold display-2">Expert engineer at your command</h2>
                    <p class="text-white">We commit to deliver customer satisfaction.</p>
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Certified Engineer
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            100% trustworthy company
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Most Genuine and transparent
                        </li>
                    </ul>
                    <a href="/contact" class="btn btn-primary btn-lg mt-4">Let’s get started</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="my-5 pt-5">
        <div class="container pt-5">
            <h6 class="">Our Services</h6>
            <h2 class=" fw-bold display-4 mb-4">What we provide</h2>
            <div class="row">
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="mdi:partnership"></iconify-icon>
                        <h5 class="services-heading mb-3">Maintenance Service</h5>
                        <p>With years of experience in the industry, our team of skilled technicians utilizes cutting-edge technology and industry best practices to provide proactive maintenance solutions tailored to your specific needs.
                        </p>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="material-symbols:component-exchange"></iconify-icon>
                        <h5 class="services-heading mb-3">Sparepart Supplier</h5>
                        <p>Customer satisfaction is at the heart of everything we do. That's why we prioritize reliability and competitive pricing in every transaction. You can trust that you're receiving top-notch and best quality products for your company needs.
                        </p>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="codicon:source-control"></iconify-icon>
                        <h5 class="services-heading mb-3">Electrical Solutions</h5>
                        <p>We specialize in delivering top-tier electrical design to empower businesses across various industries. A steadfast commitment to innovation our expert team provides comprehensive services to meet the customer satisfaction.</p>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="healthicons:water-treatment"></iconify-icon>
                        <h5 class="services-heading mb-3">Water Treatment</h5>
                        <p>From initial water quality assessments and feasibility studies to the design, installation and ongoing maintenance of advanced treatment systems, we offer end-to-end solutions that prioritize efficiency and reliability.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class=" col-md-6 ps-md-5">
                    @if($about->image)
                        <img src="/storage/{{ $about->image }}" alt="image" class="img-fluid">
                    @else
                        <img src="images/banner-about.png" alt="image" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">Who are we</h6>
                    <h2 class=" fw-bold display-4 mb-3">Experienced Water Treatment Solutions</h2>
                    <p class=""> {!! $about->about !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">

        <div class="container-fluid my-5 pt-5 p-0 ">
            <h6 class="text-center text-white mt-5">Our works</h6>
            <h2 class="text-center text-white fw-bold display-4 mb-5">Our latest projects</h2>
            <div class="mb-4">
                <p class="text-center">
                    <button class="filter-button px-3 me-2 mb-3 active" data-filter="*">All</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".install">Installation</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".loop">Mini Looping</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".panel">Panel Electrical</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".ro">Reverse Osmosis</button>
                </p>
            </div>

            <div class="isotope-container text-center">
                <div class="col-md-2 item install">
                    <a href=""><img src="images/install-1.jpg" alt="image" class="img-fluid"></a>
                </div>
                <div class="col-md-2 item panel">
                    <a href=""><img src="images/panel.jpg" alt="image" class="img-fluid"></a>
                </div>
                <div class="col-md-2 item loop">
                    <a href="#"><img src="images/loop-1.jpg" alt="image" class="img-fluid"></a>
                </div>
                <div class="col-md-2 item ro">
                    <a href="#"><img src="images/ro.jpg" alt="image" class="img-fluid"></a>
                </div>
                <div class="col-md-2 item panel">
                    <a href="#"><img src="images/panel-2.jpg" alt="image" class="img-fluid"></a>
                </div>
                <div class="col-md-2 item loop">
                    <a href="#"><img src="images/loop-2.jpg" alt="image" class="img-fluid"></a>
                </div>

            </div>
        </div>

    </section>

    <section id="project">
        <div class="container my-5 py-5">
            <div class="row process-components my-5">
                <div class="d-flex flex-wrap justify-content-between">

                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:phone-outline"></iconify-icon>
                        <h5 class="process-heading">call or Fill form</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:forum"></iconify-icon>
                        <h5 class="process-heading">Talk with us</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:archive-search-outline"></iconify-icon>
                        <h5 class="process-heading">Inspect & prososal</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:car-lifted-pickup"></iconify-icon>
                        <h5 class="process-heading">Prep & installation</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:shield-home-outline"></iconify-icon>
                        <h5 class="process-heading">job site picked up</h5>
                    </div>


                </div>
            </div>
        </div>
    </section>

    @if ($posts->count())
    <section id="blog" class="my-5 ">
        <div class="container py-5">

            <div class="row align-items-center ">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <h6 class="">Our Articles</h6>
                        <h2 class=" fw-bold display-4 mb-3">Latest blogs</h2>
                        <a href="/blog" class="btn btn-primary mb-5 mb-md-0">Read Articles</a>

                    </div>
                </div>

                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-3">
                            <a href="/blog/{{$post->slug}}">
                                @if ($post->image)
                                    <img src="{{asset('storage/' . $post->image )}}" alt="image" class="img-fluid">                                    
                                @else
                                    <img src="https://source.unsplash.com/1200x800/?abstract" alt="image" class="img-fluid"> 
                                @endif
                            </a>
                            <h6 class="my-3">Posted by: Arcotama</h6>
                            <a href="/blog/{{$post->slug}}" class="text-decoration-none">
                                <h5 class="mb-3">{{ $post->title }}</h5>
                            </a>
                            <p>{{ Str::limit(strip_tags($post->body), 100, '...') }}
                            </p>
                            <a href="/blog/{{$post->slug}}" class="btn btn-primary mt-3 mb-5">Read More</a>

                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </section>  
    @endif
    

    <section id="cta" class="position-relative my-5">
        <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
            <img src="images/cta-pattern.png" alt="pattern">
        </div>
        <div class="container my-5 py-5">
            <div class="row align-items-center my-5">
                <div class="col-md-6 offset-md-2">
                    <h6 class="text-white">Get started now</h6>
                    <h2 class="text-white fw-bold display-4">Get your projects done</h2>
                </div>
                <div class="col-md-2">
                    <a href="/contact" class="btn btn-primary cta-button ">Get in touch</a>
                </div>
            </div>
        </div>
    </section>


@push('js')
<script>
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('nav .navbar-nav .nav-item a');

    window.onscroll = () => {
        sections.forEach(sec => {
            let top = window.scrollY;
            let offset = sec.offsetTop;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if(top >= offset && top < offset + height) {
                navLinks.forEach(links => {
                    links.classList.remove('active');
                    document.querySelector('nav .navbar-nav .nav-item a[href*= '+ id +']').classList.add('active');
                })
        }});
    };
</script>
@endpush

@endsection