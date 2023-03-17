@extends('layout')

@section('content')
<div class="row">
<div class="col-xl-6 offset-3 col-lg-7 col-md-12  ">
    <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
        <h3 class="fw-medium h4">Fill out the form and we'll be in touch as soon as possible.</h3>
            <form method="POST" action="/trials/store" class="mt-4 register-form">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title') }}">
                            <div class="input-group mb-3">
                                @error('title')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Label" name="label" value="{{ old('label') }}">
                            <div class="input-group mb-3">
                                @error('label')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Company Name" name="company" value="{{ old('company') }}">
                            <div class="input-group mb-3">
                                @error('company')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            <div class="input-group mb-3">
                                @error('email')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Location" name="location" value="{{ old('location') }}">
                            <div class="input-group mb-3">
                                @error('location')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Website" name="website" value="{{ old('website') }}">
                            <div class="input-group mb-3">
                                @error('website')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <textarea name="description" class="form-control" placeholder="Tell us more about your project, needs and budget" style="height: 120px">{{ old('description') }}</textarea>
                            <div class="input-group mb-3">
                                @error('description')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label small" for="flexCheckChecked">
                                Yes, I'd like to receive occasional marketing emails from us. I have the
                                right to opt out at any time.
                                <a href="#"> View privacy policy</a>.
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection