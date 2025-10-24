<div>
    <h2>Add New User</h2>
    @if(session('message'))
    <span class="success-message">{{ session('message') }}</span>
    @endif

    @if(session('name'))
    <span class="success-message">{{ session('name') }}</span>
    @endif

    {{-- {{ session()->keep(['name']) }} --}}

    {{-- {{ session()->reflash() }} --}}
    <form action="add" method="post">
        @csrf

        <input type="text" name="name" placeholder="Enter name">
        <br/><br/>

        <input type="text" name="email" placeholder="Enter Email">
        <br/><br/>

        <input type=number name="phone" placeholder="Enter Phone">
        <br/><br/>
        

        <button type="submit">Add</button>
    </form>

    <!-- It always seems impossible until it is done. - Nelson Mandela -->
</div>

<style>
    .success-message{
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px 20px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>
