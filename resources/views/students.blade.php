<div>
    <h1>Students List</h1>
     
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>


        </tr>
        @foreach ($students as $st)
            <tr>
                <td>{{ $st->name }}
                <td>{{ $st->email }}
                <td>{{ $st->phone }}
            </tr>

        @endforeach
    </table>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
