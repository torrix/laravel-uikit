@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-card-body uk-width-large">
            <h2 class="uk-card-title">Reset Password</h2>
            <form method="POST" action="{{ route('password.email') }}" class="uk-form-stacked">
                @csrf
                @if (session('status'))
                    <div uk-alert class="uk-alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="uk-margin">
                    <label for="email" class="uk-form-label">
                        {{ __('E-Mail Address') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('email') uk-form-danger @enderror" id="email" name="email" type="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-control">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
