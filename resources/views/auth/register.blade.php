@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: #f3f5f7;
    }

    .lBox{
        min-width: 0;
        background-color: white;
        box-shadow: #c7c7c7 0px 0px 30px;
        padding: 30px;
        border-radius: 15px;
    }

    .btnSubmit {
        border-radius: 15px; 
        padding: 5px 20px;
        border: none;
        color: white;
        background-image: linear-gradient(273deg, #4eb3ff, #0074ff);
        box-shadow: #c7c7c7 5px 0px 20px;
        width: 100%;
    }

    input{
        border-radius: 15px !important;
        margin-bottom: 10px;    
    }

    .fPass{
        float: right;
        font-size: 12px;
        color: rgb(109, 109, 109);
        margin-top: 10px;
        text-decoration: none;
    }
    
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-6">
            <div class="lBox">
                <h1 class="text-center">Register</h1><br>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="" class="text-bold"><strong>Name</strong></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus name="name" id="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="" class="text-bold"><strong>Email Adress</strong></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus name="email" id="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="" class=""><strong>Password</strong></label>
                    <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="" class=""><strong>Confirm Password</strong></label>
                    <input type="password" name="password_confirmation" id="" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"><br>

                    <button type="submit" class="btnSubmit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
