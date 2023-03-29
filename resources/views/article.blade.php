<h1>liste des articles</h1>
<table border=1>
	@foreach($articles as $article)
	<tr>
		<td>{{$article->id}}</td>
		<td>{{$article->name}}</td>
		<td>{{$article->description}}</td>
	</tr>
	@endforeach
</table>
