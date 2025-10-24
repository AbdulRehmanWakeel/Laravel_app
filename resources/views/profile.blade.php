<div>
    <h1>Profile Page</h1>

    @if(session('name'))
    <h3>Welcome, {{ session('name') }}</h3>
    @else
    <h3>No user found in session
        <pre>
        <a href="login">Login</a>
    </h3>
    @endif

    <a href="logout">Logout</a>
    {{ session('allData')['name']}}

    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
