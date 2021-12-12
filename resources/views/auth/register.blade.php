@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"--}}
{{--                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email"--}}
{{--                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"--}}
{{--                                        name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="phone_number"--}}
{{--                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="phone_number" type="text"--}}
{{--                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"--}}
{{--                                        value="{{ old('phone_number') }}" required>--}}

{{--                                    @error('phone_number')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $phone_number }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password"--}}
{{--                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password"--}}
{{--                                        class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                        required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password-confirm"--}}
{{--                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control"--}}
{{--                                        name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="col-md-12 contents">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light border rounded py-3">

            <div class="mb-4 text-center">
                <!-- <div class="text-center">
                    <img class="logo" src="assets/images/logo.png">
                </div> -->
                <h3>Sign Up</h3>
                <p class="mb-4">Start with your free account today</p>
            </div>

            <form action="{{ url('register') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="form-group col-12 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group first mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group first mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group last mb-4">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group last mb-4">
                    <label for="phone_number"
                           >{{ __('Phone Number') }}</label>

                        <input id="phone_number" type="text"
                               class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                               value="{{ old('phone_number') }}" required>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $phone_number }}</strong>
                                        </span>
                        @enderror
                </div>
                <div class="form-group first mb-3">
                    <label for="location">Location</label>
                    <select class="form-control" id="location" name="location">
                        <option>USA</option>
                        <option>Europe</option>
                        <option>Canada</option>
                        <option>Asia</option>
                    </select>
                </div>
                <div class="form-group first mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}">
                </div>
                <div class="form-group first mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <input type="submit" value="Sign Up" class="btn btn-block btn-primary py-3" style="background:#159AFF;border-color: #159AFF;">
            </form>
        </div>
    </div>
</div>
@endsection
