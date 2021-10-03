<html>
<body>
@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
<form action="dologin" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit"></form>
@endsection
</body>
</html>