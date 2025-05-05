
@section('content')
  <h1>Edit User #{{ $user->id }}</h1>
  <form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input name="username" class="form-control" value="{{ old('username', $user->username) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input name="password" type="password" class="form-control" value="{{ old('password', $user->password) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Skills</label>
      <input name="skills" class="form-control" value="{{ old('skills', $user->skills) }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Gender</label>
      <select name="gender" class="form-select">
        <option value="male"   @if($user->gender==='male')   selected @endif>Male</option>
        <option value="female" @if($user->gender==='female') selected @endif>Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Age</label>
      <input name="age" type="number" class="form-control" value="{{ old('age', $user->age) }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('/users') }}" class="btn btn-secondary">Cancel</a>
  </form>
@endsection
