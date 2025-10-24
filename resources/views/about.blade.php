@include('common.header')

<div>
    <h1>{{ __('about.title') }}</h1>
    <p>{{ __('about.description') }}</p>
    {{-- <h3>User name is {{ $user }}</h3> --}}
    {{-- <h1>About {{ $name }}</h1> --}}
    <!-- {{ __('about.quote') }} -->
</div>

@include('common.inner',['page'=>"this is a about page"])

