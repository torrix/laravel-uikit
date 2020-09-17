@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-heading-divider">UIkit starter template for Laravel 8</h1>
            <p>
                Congratulations, you've successfully installed the UIkit starter template for Laravel 8. Have a browse
                through the links below for inspiration on how to work with Laravel, UIkit, and Vue.js. Happy coding!
            </p>
            <div class="uk-grid" data-uk-grid data-uk-height-match="target:.uk-card">
                <div class="uk-width-1-3@l">
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                        <h3 class="uk-card-title">Laravel</h3>
                        <ul class="uk-list uk-list-divider">
                            @include('laravel-uikit::demo.laravel')
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-3@l">
                    <div class="uk-card uk-card-primary uk-card-body uk-card-hover">
                        <h3 class="uk-card-title">UIkit</h3>
                        <ul class="uk-list uk-list-divider">
                            @include('laravel-uikit::demo.uikit')
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-3@l">
                    <div class="uk-card uk-card-secondary uk-card-body uk-card-hover">
                        <h3 class="uk-card-title">Vue.js</h3>
                        <ul class="uk-list uk-list-divider">
                            @include('laravel-uikit::demo.vuejs')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
