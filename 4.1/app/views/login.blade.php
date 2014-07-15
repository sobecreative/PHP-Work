@extends('layout.main')
@section('title', 'Login here')
@section('content')
	<form class="centerForm">
		<a href="{{ URL::route('home') }}"><img src="../img/logo.png" alt="logo"></a>
		<input class="focus" id="user_email" name="user[email]" placeholder="Email Address" size="30" type="text" value="">
		<input autocomplete="off" id="user_password" label="false" name="user[password]" placeholder="Password" size="30" type="password">
		<input name="commit" type="submit" value="Log In">
		<footer>
			<p><a href="">Forgot password?</a></p>
		</footer>
	</form>

@stop