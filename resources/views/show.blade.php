{{-- <!-- filepath: e:\laravel\First_Project\resources\views\show.blade.php -->
<div>
    <h1>View User Information</h1>
    @if ($user)
        <table border="1">
            <tr>
                <th>UserName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Skill</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->skills }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
            </tr>
        </table>
    @else
        <p>User not found.</p>
    @endif
</div>
<div>
    <button type="button" class="btn btn-outline-primary" onclick="location.href='/users'">Back</button>
    @if ($user)
        <button type="button" class="btn btn-outline-success" style="color: rgb(0, 255, 98);"
            onclick="location.href='/users/edit/{{ $user->id }}'">Edit</button>
        <button type="button" class="btn btn-outline-danger" style="color: red;"
            onclick="location.href='/users/delete/{{ $user->id }}'">Delete</button>
    @endif
</div> --}}

@section('content')
  <h1>User Details</h1>
  <div class="mb-3"><strong>Username:</strong> {{ $user->username }}</div>
  <div class="mb-3"><strong>Email: </strong> {{ $user->email }}</div>
  <div class="mb-3"><strong>Skills:</strong> {{ $user->skills }}</div>
  <div class="mb-3"><strong>Gender:</strong> {{ $user->gender }}</div>
  <div class="mb-3"><strong>Age:   </strong> {{ $user->age }}</div>
  <a href="{{ route('/users') }}" class="btn btn-secondary">Back to List</a>
@endsection