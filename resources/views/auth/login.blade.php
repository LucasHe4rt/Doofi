@extends('layouts.app')

@section('content')
<div style="margin-top: 20px" class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card  border-primary">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <small id="emailHelp" class="invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password">Senha</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <small id="emailHelp" class="invalid-feedback">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        <div class="form-group mb-0 col-md-12">
                                <button style="width: 100px" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
