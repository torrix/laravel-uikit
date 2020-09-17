@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-card-body uk-width-large">
            <h2 class="uk-card-title">Register</h2>
            <form method="POST" action="{{ route('register') }}" class="uk-form-stacked">
                @csrf
                <div class="uk-margin">
                    <label for="name" class="uk-form-label">
                        {{ __('Name') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('name') uk-form-danger @enderror" id="name" name="name" type="text"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
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
                    <label for="password" class="uk-form-label">
                        {{ __('Password') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password" type="password"
                               class="uk-input @error('password') uk-form-danger @enderror" name="password" required
                               autocomplete="new-password">
                        @error('password')
                            <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <label for="password_confirmation" class="uk-form-label">
                        {{ __('Confirm Password') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password_confirmation" type="password"
                               class="uk-input @error('password') uk-form-danger @enderror" name="password_confirmation" required
                               autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-control">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
