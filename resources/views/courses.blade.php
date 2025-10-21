<div>
    <h1>Course Data</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Description</td>


        </tr>
        @foreach ($courses as $c)
            <tr>
                <td>{{ $c->name }}
                <td>{{ $c->description }}
            </tr>

        @endforeach
    </table>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
