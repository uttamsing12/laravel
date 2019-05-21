
<!DOCTYPE html>
<html>
<head>
	<title>book</title>
</head>
<body>
  <table border="1">
  	<tr>
  		<td>Name</td>
  		<td>Author Name</td>
  		<td>Price</td>
  		<td>Description</td>
  	</tr>
  	@foreach($books as $book)
  	<tr>
  		<td> {{ $book->name }} </td>
  		<td> {{ $book->author or '---' }} </td>
  		<td> {{ $book->price or '---' }} </td>
  		<td> {{ $book->description or '---' }} </td>
  	</tr>
  	@endforeach
  </table>
</body>
</html>