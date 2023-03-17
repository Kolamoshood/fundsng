@extends('layout')

@section('content')
<br>
<br>
<br>


<section class="testimonial-section ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                {{-- success message from web.php --}}
                @if(session()->has('message'))
                        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="col-lg-6 offset-3">
                            <p class="text-dark">{{ session('message') }}</p>
                        </div>

                @endif


                <div class="section-heading text-center">
                    @include('search')
                    <h4 class="h5 text-primary">Testimonial</h4>
                    <h2>What They Say About Us</h2>
                    <p>Dynamically initiate market positioning total linkage with clicks-and-mortar technology
                        compelling data for cutting-edge markets.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100">
                    <div class="swiper testimonialSwiper">

                    </div>
                </div>
            </div>
        </div>
        <div>
            @if(count($Trials) == 0)

            <p>No trials available</p> 
            @endif
            <div class="row">
            @foreach($Trials as $Trial)
            
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-3 mb-2 mb-lg-0">
                        <div class="border border-1 p-3 rounded-custom position-relative">
                            <div class="pricing-info mb-1">
                                <ul class="pricing-feature-list list-unstyled">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <li>
                                                <a href="/trial/{{ $Trial->id }}">{{ $Trial->title }}</a>
                                            </li>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <li> {{ $Trial->label }}</li>
                                            <li> {{ $Trial->company }}</li>
                                            <li> {{ $Trial->email }}</li>
                                            <li> {{ $Trial->location }}</li>
                                            <li> <a href="{{ $Trial->website }}">{{ $Trial->website }}</a></li>
                                            <li>{{ $Trial->title }}</li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>

    <div class="mt-3 b-3">
        <p>{{ $Trials->Links() }}</P>
    </div>

</section>
<!--testimonial section end-->

                    
@endsection