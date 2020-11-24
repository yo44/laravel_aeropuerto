
@extends('plantillas.layout')

@extends('layouts.app')

@section('content')
@section('title','Servicios')
@section('contenido')

<div class="row">
	<div class="col-12">
		<h1>Contacto</h1>
		<div class="card">
			  <div class="card-body">
			    <form>
			    	<div class="form-group">
				    <label for="exampleInputEmail1">* Nombre</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">* Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">* Comentario</label>
				    <textarea class="form-control"></textarea>
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			  </div>
			</div>
	</div>
</div>
@endsection