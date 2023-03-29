@extends('layouts.master')
@Section('content')
<form action= "{{url('articles')}}" method="POST">
	{{ csrf_field()}}
	<table>
          <tr><td>nom</td><td><input type="text" name="nom"></td></tr>
		<tr><td>description</td><td><textarea name="description"></textarea></td></tr>
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>
@endsection
