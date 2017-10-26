@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Libros <a href="libro/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('libro.libro.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Categoria</th>
					<th>Titulo</th>
					<th>Idioma</th>
					<th>Id Autor</th>
					<th>Estado</th>
					<th>Editorial</th>
				</thead>
               @foreach ($libros as $lib)
				<tr>
					<td>{{ $lib->idlibro}}</td>
					<td>{{ $lib->categoria}}</td>
					<td>{{ $lib->titulo}}</td>
					<td>{{ $lib->idioma}}</td>
					<td>{{ $lib->idautor}}</td>
					<td>{{ $lib->estado}}</td>
					<td>{{ $lib->ideditorial}}</td>
					<td>
						<a href="{{URL::action('LibroController@edit',$lib->idlibro)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$lib->idlibro}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('libro.libro.modal')
				@endforeach
			</table>
		</div>
		{{$libros->render()}}
	</div>
</div>


@endsection