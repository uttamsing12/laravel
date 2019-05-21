<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <table>
 	<tr>
 		<td>
 			<h3>Create a new record</h3>
 		</td>
 		<td>
 			<button><a href="{{ route('book.create')}}">click</a></button>
 		</td>
 	</tr>
 	 	<tr>
 		<td>
 			<h3>View all record</h3>
 		</td>
 		<td>
 			<button><a href="{{ route('book.list') }}"> click</a></button>
 		</td>
 	</tr>
 </table>
</body>
</html>