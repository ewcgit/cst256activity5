<html>
<body>
@extends('layouts.appmaster')
@section('title', 'Customer Page')
@section('content')
<form action="addcustomer" method="post">
Firstname: <input type="text" name="firstname"><br> <?php echo $errors->first('firstname')?>
Lastname: <input type="text" name="lastname"><br> <?php echo $errors->first('lastname')?>
<input type="submit"></form>
@endsection
</body>
</html>