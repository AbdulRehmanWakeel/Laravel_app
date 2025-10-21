@include('common.header')

<div>
    <h1>About Page</h1>
    <p>Book subscription service: A service, like Extra Read, that functions as a library or book boutique, allowing members to borrow books for a monthly fee, notes.</p>
    <h3>User name is {{ $user }}</h3>
    {{-- <h1>About {{ $name }}</h1> --}}

    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>

@include('common.inner',['page'=>"this is a about page"])
