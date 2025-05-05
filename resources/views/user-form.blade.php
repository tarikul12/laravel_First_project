<div>
    <h1>Add User</h1>

    {{--
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}



    <form action="addUser" , method="post">
        @csrf
        <div class="input-container">
            <input type="text" name="username" placeholder="Enter your Name" value="{{ old('username') }}">
            <span style="color: red"> @error('username') {{ $message }} @enderror </span>
        </div>


        <div class="input-container">
            <input type="text" name="email" placeholder="Enter your Email" value="{{ old('email') }}">
            <span style="color: red"> @error('email') {{ $message }} @enderror </span>
        </div>


        <div class="input-container">
            <input type="text" name="password" placeholder="Enter your Password" value="{{ old('password') }}">
            <span style="color: red"> @error('password') {{ $message }} @enderror </span>
        </div>

        <div>
            <h5>User Skills</h5>
            <input type="checkbox" name="skills" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" value="java" id="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skills" value="Node" id="node">
            <label for="node">NODE</label>
            <span style="color: red"> @error('skills') {{ $message }} @enderror </span>

        </div>

        <div>
            <h5>User Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">MALE</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">FEMALE</label>
            <span style="color: red"> @error('gender') {{ $message }} @enderror </span>

        </div>
        <div>
            <h5>User Age</h5>
            <input type="range" name="age" min="0" max="100" value="50">
            <span style="color: red"> @error('age') {{ $message }} @enderror </span>
        </div>


        <div class="input-container">
            <button type="submit">Add New User</button>

        </div>
    </form>
    <a href="/" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Back</a><br>
    <a href="/users" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">User List</a>
</div>


<style>
    input {
        border-block-color: red;
        padding: 10px 5px;
        margin: auto;
        border-radius: 2px;
    }

    .input-container {
        margin: 10px;
    }

    text {
        color: yellow;
        font-size: 20px;
        font-weight: bold;
    }

    button {
        background-color: orange;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        margin: 5px;
    }

    button:hover {
        background-color: darkblue;
    }
</style>