@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Libro</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::open(array('url'=>'libro/libro','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
<div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
            		<label for="nombre">Titulo libro</label>
            		<input type="text" name="nombre" required value=""{{old('titulo')}}class="form-control" placeholder="Titulo libro...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">     
        	<div class="form-group">
 					<label>Categoria</label>
 					<select name="idcategoria" class="form-control">
 						@foreach ($categorias as $cat)
 							<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
 						@endforeach
 					</select>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">     
            <div class="form-group">
            		<label>Idioma</label>
            		<input type="text" name="codigo" required value=""{{old('idioma')}}class="form-control" placeholder="Idioma del libro...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">     
            <div class="form-group">
            		<label for="idautor">Id Autor</label>
            		<input type="number" name="idautor" required value=""{{old('nombre')}}class="form-control" placeholder="Id Autor...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">     
            <div class="form-group">
            		<label for="estado">Estado</label>
            		<input type="text" name="estado" required value=""{{old('estado')}}class="form-control" placeholder="Estado...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">     
            <div class="form-group">
            		<label for="editorial">Id Editorial</label>
            		<input type="number" name="editorial" required value=""{{old('editorial')}}class="form-control" placeholder="editorial...">
            </div>
        </div>    

          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">  
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
          </div>
</div>  


			{!!Form::close()!!}		
@endsection