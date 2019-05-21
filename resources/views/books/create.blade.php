<!DOCTYPE html>
<html>
<head>
	<title> form </title>
</head>
<body>
  <form method="post" action="{{route('book.post.form')}}">
  	{{ csrf_field() }}
  	<table>
     <tr>
         <td>Name :</td>
         <td> 
            <input type="text" name="name" value="{{old('name')}}"> 
         </td>
     </tr> 
     @if($errors->has('name')) 
       <tr><td></td><td style="color:red">{{ $errors->first('name') }} <td></tr>
     @endif                
     <tr>
         <td>Price :</td>
         <td> 
            <input type="text" name="price" value="{{old('price')}}"> 
         </td>
     </tr>
       @if($errors->has('price')) 
          <tr><td></td><td style="color:red">{{ $errors->first('price') }} <td></tr>
       @endif 
     <tr>
        <td>Author :</td>
        <td> 
           <input type="text" name="author" value="{{old('auther')}}"> 
        </td>
     </tr>
       @if($errors->has('author')) 
         <tr><td></td><td style="color:red">{{ $errors->first('author') }} <td></tr>
       @endif 
     <tr>
       <td>Description :</td>
       <td> 
          <input type="text" name="description" value="{{old('description')}}"> 
       </td>
     </tr> 
       @if($errors->has('description')) 
         <tr><td></td><td style="color:red">{{ $errors->first('description') }} <td></tr>
      @endif 
    </table>
     <input type="submit" value="submit">
  </form>
</body>
</html>