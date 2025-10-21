<div>
    <h1>Students List</h1>
     
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>


        </tr>
        @foreach ($data as $e)
            <tr>
                <td>{{ $e->name }}
                <td>{{ $e->email }}
                <td>{{ $e->phone }}
                <td>{{ $e->address }}
            </tr>

        @endforeach
    </table>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
