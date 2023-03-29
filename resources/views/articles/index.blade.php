@extends('layouts.master')
@section('content')
<a href="{{url('articles/create')}}">Nouvel article</a>
	<table border=1>
		<tr><td>nom</td><td>description</td><td>modifier</td><td>supprimer</td></tr>
		@foreach($articles as $article)
		<tr>   <td>{{$article->name}}</td>
			<td>{{$article->description}}</td>
            <td><a href="{{url('articles/'.$article->id.'/edit')}}">modifier</a></td>
			<<td><form action ="{{url('articles/'.$article->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit" >supprimer</button></form></td>

		@endforeach
	</table>
@endsection