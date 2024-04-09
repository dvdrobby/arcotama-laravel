@extends('layouts.main')

@section('content')
<section id='cta' class="position-relative py-5 mb-5">
    <div class="cta-pattern-overlay pattern-left position-absolute start-0 translate-middle-y">
        <img src="images/cta-pattern.png" alt="pattern">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Product Overview</h1>
            </div>
        </div>
    </div>
</section>

    <section id="services" class="mb-2">
        <div class="container pt-5 text-center">
            <h6 class="">Our Services</h6>
            <h2 class=" fw-bold display-4 mb-4">What we provide</h2>

            <div class="row mb-3">
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="mdi:partnership"></iconify-icon>
                        <h5 class="services-heading mb-3">Maintenance Service</h5>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="material-symbols:component-exchange"></iconify-icon>
                        <h5 class="services-heading mb-3">Sparepart Supplier</h5>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="codicon:source-control"></iconify-icon>
                        <h5 class="services-heading mb-3">Electrical Solutions</h5>
                    </div>
                </div>
                <div class=" mt-4 col-md-6 col-lg-3">
                    <div class="services-components text-center py-5 px-3">
                        <iconify-icon class="services-icon my-2" icon="healthicons:water-treatment"></iconify-icon>
                        <h5 class="services-heading mb-3">Water Treatment</h5>
                    </div>
                </div>

            </div>
            <div class="row services-components p-5">
                <img src="\images\bioscheril-pharmalab-2.jpg" alt="subloop" class="mb-1">
                <img src="\images\kino-3.jpg" alt="edi-1000 liters" class="mb-1 col-lg-3">
                <img src="\images\cosmax-2-silverson-mixer.jpg" alt="mixer" class="mb-1 col-lg-9">
                <img src="\images\whatsapp-image-2024-03-26-at-122305-am-1.jpeg" alt="mixer" class="mb-1 col-lg-4">
                <img src="\images\whatsapp-image-2024-03-26-at-122305-am-2.jpeg" alt="mixer" class="mb-1 col-lg-4">
                <img src="\images\whatsapp-image-2024-03-26-at-122305-am-3.jpeg" alt="mixer" class="mb-1 col-lg-4">
            </div>
        </div>
    </section>

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