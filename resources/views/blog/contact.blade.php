@extends('blog.layouts.main')

@section('content')
<section id='cta' class="position-relative py-5 mb-5">
    <div class="cta-pattern-overlay pattern-left position-absolute start-0 translate-middle-y">
        <img src="images/cta-pattern.png" alt="pattern">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <h1 class="heading text-white mb-3" data-aos="fade-up">Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="d-flex mt-2">
                        <div class='d-flex justify-content-center align-items-center py-3'>
                            <iconify-icon class="icon pe-4" icon="fa6-solid:map-location"></iconify-icon>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-end">
                            <h5 class="mb-2">Location:</h5>
                            <p>{{ $contact->address }},<br> Indonesia</p>
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                        <div class='d-flex justify-content-center align-items-center py-3'>
                            <iconify-icon class="icon pe-4" icon="clarity:clock-solid"></iconify-icon>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-end">
                            <h5 class="mb-2">Open Hours:</h5>
                            <p>
                                Sunday-Friday:<br>
                                08:00 AM - 17:00 PM
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                        <div class='d-flex justify-content-center align-items-center py-3'>
                            <iconify-icon class="icon pe-4" icon="clarity:email-solid"></iconify-icon>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-end">
                            <h5 class="mb-2">Email:</h5>
                            <p> {{ $contact->email }}</p>
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                        <div class='d-flex justify-content-center align-items-center py-3'>
                            <iconify-icon class="icon pe-4" icon="mingcute:phone-call-fill"></iconify-icon>
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-end">
                            <h5 class="mb-2">Call:</h5>
                            <p>{{ $contact->phone }}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                <div class="row justify-content-start">
                    <div class="col-md-6">
                        <iframe src="{{ $maps->links }}" style="border: 0; height:400px; width:400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-3"></iframe>
                    </div>
                </div>
                {{-- <form action="#">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</section> <!-- /.untree_co-section -->

@endsection