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
            <th>Action</th>

        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->skills }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
                <td style="background-color: hsl(5, 73%, 97%);">
                    <a href="/users/show/{id}" class="btn btn-outline-primary">View</a>
                    <a href="/users/edit/{id}" class="btn btn-outline-success" style="color: rgb(0, 255, 98);">Edit</a>
                    <a href="users/delete/{id}" class="btn btn-outline-danger" style="color: red;">Delete</a>
                </td>
                


            </tr>
        @endforeach
    </table>

</div>
