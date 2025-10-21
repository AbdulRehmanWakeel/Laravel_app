@include('common.header')

<x-message-banner msg="User Login Successfully." class="success"/>
<x-message-banner msg="User signup Successfully." class="success"/>

<br/>
<br/>
<br/>

<x-message-banner msg="Password not correct,Please try again." class="error"/>
<x-message-banner msg="Spelling cannot correct." class="warning"/>

<style>
    .success{
        background:lightgreen;
        color:blue;
        padding:3px 10px;
        border-radius:2px;
        display: inline-block;
        margin:10px;
    }
    .error{
        background:#ff000069;
        color:red;
        padding:3px 10px;
        border-radius:2px;
        display: inline-block;
        margin:10px;
    }
    .warning{
        background:#ffa50073;
        color:orange;
        padding:3px 10px;
        border-radius:2px;
        display: inline-block;
        margin:10px;
    }

</style>

<div>
    <h1>Home Page</h1>
    <p>A newspaper extra, extra edition, special edition, or simply extra is a special issue of a newspaper published outside the regular schedule to report major or breaking news that arrived too late for the standard edition, such as the outbreak of war, the assassination of a public figure, or key developments in a high-profile trial.
        It evolved from the earlier broadside, a single-sided sheet intended to be posted in public places.</p>

    {{-- <h3>{{ $name }}</h3> --}}
    {{-- <h3>{{ rand() }} --}}
    {{-- <h3>{{ $users[2] }}</h3> --}}

    {{-- @if($name == 'anil')
    <h2>This is Anil</h2>
    @elseif($name == 'sam')
    <h2>This is Sam</h2>
    @else
    <h2>Other user</h2>
    @endif --}}




    <!-- An unexamined life is not worth living. - Socrates -->
</div>

{{-- <div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>

<div>
    @for($i=0; $i<=10; $i++)
    <h2>{{ $i }}</h2>
    @endfor
</div> --}}

{{-- @includeif('common.common',['page'=>"this is a home page"]) --}}
{{-- @include('common.inner',['page'=>"this is a home page"]) --}}
