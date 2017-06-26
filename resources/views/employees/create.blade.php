@include('alerts.requets');
@extends('layouts.landingPage')
@section('title', 'Empleados')
@section('title-content', 'Crear Empleado')
@section('content')


<div id="content" class="jumbotron main">
		<h1 class="text-center padding ">Empleado</h1>
		<div class="container">
			<div class="row">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2 class="panel-title">Crear Empleado</h2>
					</div>
		<div class="panel-body">
{{ Form::open(['route'=>'employees.store', 'method'=>'POST']) }}



						@include('forms.form_employee')


						{!! Form::close() !!}

						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection