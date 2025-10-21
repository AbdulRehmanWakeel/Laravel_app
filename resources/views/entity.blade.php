<div>
    <h1>Login Form</h1>

    <form action="/login" method="post">

    {{-- <form action="/entity" method="post"> --}}
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
        @csrf

        <input type="text" name="entity" placeholder="Enter name">
        <br/><br/>

        <input type="password" name="password" placeholder="Enter password">
        <br/><br/>

        <button type="submit">Login</button>
    </form>


    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
