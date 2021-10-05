<html>
<body>
@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
<form action="dologin" method="post">
Username: <input type="text" name="username"><br> <?php echo $errors->first('username')?>
Password: <input type="password" name="password"><br> <?php echo $errors->first('password')?>
<input type="submit"></form>
@endsection
</body>
</html>