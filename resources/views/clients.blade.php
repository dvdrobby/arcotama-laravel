@extends('layouts.main')

@section('content')
<section id='cta' class="position-relative py-5 mb-5">
    <div class="cta-pattern-overlay pattern-left position-absolute start-0 translate-middle-y">
        <img src="images/cta-pattern.png" alt="pattern">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Our Clients</h1>
            </div>
        </div>
    </div>
</section>

@if ($clients->count())
    <section class="row justify-content-center align-items-center">
        <div class="my-5 pt-5 col-lg-10">
            <div class="d-flex row justify-content-center align-items-center">
                @foreach ($clients as $client)
                    <div class="col-md-3 d-flex flex-column mb-3">
                        <h3 class="text-center">{{ $client->name }}</h3>
                        <p class="text-center">{{ $client->address }}</p>      
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    @endif
 


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