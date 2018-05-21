<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ENT Report</title>



      <link rel="stylesheet" href="{{ asset('css/login.css')}}">


</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Login ENT Report</h1>
		<form action="{{ url('/masuk/action')}}" method="post">
      {{ csrf_field() }}
      {{ method_field('post')}}
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>

	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

    <script src="{{ asset('css/login.css')}}"></script>

</body>
</html>
