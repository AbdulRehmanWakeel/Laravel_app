<div>
    <h2>Add New User</h2>

{{-- @if($errors->any())
@foreach ($errors->all() as $error)
<div style='color:red'>
    {{ $error }}
</div>
@endforeach
@endif --}}
    <form method="post" action="adduser">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" value="{{ old('username') }}" name="username" class="{{($errors->first('username')?'input-error':'' )}}"/>
            <span style='color:red'>
                @error('username')
                {{ $message }}@enderror
            </span>
        </div>
         

        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" value="{{ old('email') }}" name="email"/>
            <span style='color:red'>
                @error('email')
                {{ $message }}@enderror
            </span>
        </div>
        
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" value="{{ old('city') }}" name="city"/>
            <span style='color:red'>
                @error('city')
                {{ $message }}@enderror
            </span>
        </div>
        <div class="input-wrapper">
            <h4>Skills</h4>
            <input type="checkbox" value="PHP" name="skill[]" id="php"/>
            <label for="php">PHP</label>
            <input type="checkbox" value="Java" name="skill[]" id="java"/>
            <label for="java">Java</label>
            <input type="checkbox" value="Python" name="skill[]" id="python"/>
            <label for="python">Python</label>
            <span style='color:red'>@error('skill'){{ $message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>Gender</h4>
            <input type="radio" value="Male" name="gender" id="male"/>
            <label for="male">Male</label>
            <input type="radio" value="Female" name="gender" id="female"/>
            <label for="female">Female</label>
            <span style='color:red'>@error('gender'){{ $message }}@enderror</span>

            
        </div>
        <div class="input-wrapper">
            <h4>City</h4>
            <select name="city">
                <option value="">Select Your City</option>
                <option value="bahawalpur">Bahawalpur</option>
                <option value="lahore">Lahore</option>
                <option value="karachi">Karachi</option>
                <option value="faisalabad">Faisalabad</option>

            </select>
            
        </div>
        <div>
            <h4>Age</h4>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br/>

        <div class="input-wrapper">
             <button>Add New User</button>
            
        </div>
    </form>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>

<style>
    input{
        border:orange 1px solid;
        height:35px;
        width:200px;
        border-radius: 2px;
        color:orange;
    }
.input-wrapper{
    margin:10px;
}
button{
        border:orange 1px solid;
        height:35px;
        width:200px;
        border-radius: 2px;
        color:orange;
        background-color:#fff;
        cursor:pointer;
    }
.input-error{
    border: 1px solid red;
    color:red;

}
</style>
