<div>
    <h1>Users List</h1>
    <table border="1">
        <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Skill</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->skills }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->age }}</td>
        </tr>
        @endforeach
    </table>

</div>