<!DOCTYPE html>
<html>
<head>
    <title>{{ __('welcome.title') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">

    <h1 class="mb-4">{{ __('welcome.heading') }}</h1>
    <h3>Choose your language</h3>
    <a href="/setlang/en">English</a>
    <br/>
    <a href="/setlang/ur">Urdu</a>
    <br/>
    <a href="/setlang/ko">Korean</a>
    <br/>
    <a href="/setlang/hi">Hindi</a>

    <br/>
    <br/>
    <nav>
        <a href="{{ url('/home') }}" class="btn btn-primary">{{ __('welcome.home') }}</a>
        <a href="{{ url('/about/en') }}" class="btn btn-secondary">{{ __('welcome.about') }}</a>
        <a href="{{ url('/login') }}" class="btn btn-info">{{ __('welcome.login') }}</a>
    </nav>
    <br/>
    <br/>
    <h3>{{__('welcome.Name',['name'=>"hamza"])}}</h3>
</body>
</html>
