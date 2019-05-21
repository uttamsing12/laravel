<!DOCTYPE html>
<html>
<head>
	<title>login</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
 <form action="{{ route('login.post') }}" method="post">
 	{{csrf_field()}}
 	 <table style="margin-top: 10px;">
         @include('flash::message')
    	<tr>
    		<td> Enter Email</td>
    		<td><input type="text" name="email" ></td>
    	</tr>
        @if($errors->has('email')) 
          <tr><td></td><td style="color:red">{{ $errors->first('email') }} <td></tr>
        @endif 
    	<tr>
    		<td> Enter Password</td>
    		<td><input type="password" name="password" ></td>
    	</tr>

        @if($errors->has('password')) 
          <tr><td></td><td style="color:red">{{ $errors->first('password') }} <td></tr>
        @endif 
        <tr>
            <td><input type="submit" value="login"></td>
        </tr>
    </table>
 </form>
</body>
</html>