<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Users</title>
</head>
<body>
  <h1>Users</h1>

  @if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
  @endif

  <h2>Create user</h2>
  <form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label>Name: <input type="text" name="name" value="{{ old('name') }}"></label><br>
    <label>Email: <input type="email" name="email" value="{{ old('email') }}"></label><br>
    <label>Password: <input type="password" name="password"></label><br>
    <button type="submit">Create</button>
  </form>

  @if($errors->any())
    <div style="color:red;">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <h2>List of users</h2>
  <ul>
    @foreach($users as $user)
      <li>{{ $user->id }} — {{ $user->name }} — {{ $user->email }} — {{ $user->created_at }}</li>
    @endforeach
  </ul>
</body>
</html>
