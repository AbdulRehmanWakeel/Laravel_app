<div>
    <h1>Entity Form</h1>

     
    <form action="/entity" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf

        <input type="text" name="entity" placeholder="Enter name">
        <br/><br/>

        <input type="password" name="password" placeholder="Enter password">
        <br/><br/>

        <button type="submit">Submit</button>
    </form>


    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
