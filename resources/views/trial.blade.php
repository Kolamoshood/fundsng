@extends('layout')

@section('content')


    <section class="testimonial-section ptb-120">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class=" col-lg-4 offset-2 align-content-center">
                            <h3>{{$Trial['title']}}</h3>
                            <p>{{$Trial['label']}}</p>
                            <p>{{$Trial['company']}}</p>
                            <p>{{$Trial['email']}}</p>
                            <p>{{$Trial['location']}}</p>
                            <p><a href="{{$Trial['website']}}">{{$Trial['website']}}</a></p>
                            <p>{{$Trial['description']}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
