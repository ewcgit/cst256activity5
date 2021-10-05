<html>
<body>
@extends('layouts.appmaster')
@section('title', 'Customer Page')
@section('content')
<form action="addorder" method="post">
Product: <input type="text" name="product"><br> <?php echo $errors->first('product')?>
The customer's ID: <input type="text" name="customerid"><br> <?php echo $errors->first('customerid')?>
<input type="submit"></form>
@endsection
</body>
</html>