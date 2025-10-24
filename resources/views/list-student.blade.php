<div>
    <h1>Student List</h1>
    <form method="get" action="search">
        <input type="text" name="search" placeholder="Enter search name" value="{{@$search}}"/>
        <button>Search</button>
    </form>

    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
        <br/>
        <br/>
        <table border="1">
            <tr>
                <td>Section</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Created_at</td>
                <td>Operations</td>
            </tr>
            @foreach ($students as $std)
            <tr>
                <td><input type="checkbox" value="{{ $std->id }}" name="ids[]"></td>
                <td>{{ $std->name }}</td>
                <td>{{ $std->email }}</td>
                <td>{{ $std->phone }}</td>
                <td>{{ $std->created_at }}</td>
                <td>
                    <a href="{{'delete/' . $std->id}}">Delete</a> 
                    <a href="{{'edit/' . $std->id}}">Edit</a>
                </td>

            </tr>
            @endforeach
        </table>
    </form>

    <br/>
    <br/>
    {{ $students->links() }}

</div>

<style>
    .w-5.h-5{
        width:20px;
    }
</style>
