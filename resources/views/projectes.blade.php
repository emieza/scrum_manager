
<h1>hello plantilla</h1>

<p>here we are...</p>

<ul>
@foreach( $projectes as $projecte )
	<li>{{$projecte->nom}}
	@if( $projecte->PO )
		, PO: {{$projecte->PO->name}}
	@endif
	</li>
@endforeach
</ul>

