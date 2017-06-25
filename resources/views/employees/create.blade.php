@include('alerts.requets');
@extends('layouts.landingPage')
@section('title', 'Empleados')
@section('title-content', 'Empleados')
@section('content')


{{ Form::open(['route'=>'employees.store', 'method'=>'POST',
'class'=>'form-horizontal form-label-left"']) }}

		@include('forms.form_employee')
{{ Form::close() }}

<div id="content" class="jumbotron main">
		<h1 class="text-center padding ">Empleados</h1>
		<div class="container">
			<div class="row">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2 class="panel-title">Crear Empleado</h2>
					</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'employees.store', 'method' => 'POST']) !!}
			                <fieldset class="col-sm-10 col-sm-offset-1">
			                    <!-- Form Name -->
			                    <!-- Prepended text-->
			                    {!!Form::token()!!}
			                    <h4>Información personal del empleado</h4>
			                    <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="nombres">Nombres</label>
			                        <input type="text" class="form-control" id="names" name="names" placeholder="Nombres estudiante">
			                    </div>
			                    <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="nombres">Apellidos</label>
			                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos estudiante">
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Estado Civil</label>
			                        <select id="civil_status" name="civil_status" class="form-control">
			                        	<option disabled selected value> -- select an option -- </option>
			                        	<option>Soltero/a</option>
			                        	<option>Casado/a</option>
			                        	<option>Comprometido/a</option>
			                        	<option>Divorciado/a</option>
			                        	<option>Viudo/a</option>
			                        </select>
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Fecha Nacimiento</label>
			                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha Nacimiento" >
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Identificación</label>
			                        <input type="text" class="form-control" id="identity_card" name="identity_card" >
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Email</label>
			                        <input type="email" class="form-control" id="email" name="email" placeholder="Email estudiante">
			                    </div>
			                    <h4>Información Universitaria del estudiante</h4>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Condición nivelación</label>
			                        <select id="condition" name="condition" class="form-control">
			                        	<option disabled selected value> -- select an option -- </option>
			                        	<option>Lengua Española 100 / Matematica 100</option>
			                        	<option>Lengua Española 100</option>
			                        	<option>Matematica 100</option>
			                        </select>
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Tanda</label>
			                        <select id="shift" name="shift" class="form-control">
			                        	<option disabled selected value> -- select an option -- </option>
			                        	<option>Matutina</option>
			                        	<option>Nocturna</option>
			                        </select>
			                    </div>
			                    <div class="form-group col-sm-12">
			                        <label class="control-label" for="nombres">Carrera</label>
			                        <select id="career" name="career" class="form-control">
			                        	<option disabled selected value> -- select an option -- </option>
			                        	<option disabled>Salud </option>
			                        	<option>Técnico Superior en Higiene Dental</option>
			                        	<option>Técnico Superior en Enfermería</option>
			                        	<option>Técnico Superior en Imágenes Médicas</option>
			                        	<option>Técnico Superior en Mecánica Dental</option>

			                        	<option disabled>Informatica </option>
			                        	<option>Técnico Superior en Administración de Redes</option>
			                        	<option>Técnico Superior en Desarrollo de Software</option>
			                        	<option>Técnico Superior en Soporte Informático</option>

			                        	<option disabled>Artes </option>
			                        	<option>Técnico Superior en Fotografía</option>
			                        	<option>Técnico Superior en Diseño de Modas</option>
			                        	<option>Técnico Superior en Diseño Gráfico</option>
			                        	<option>Técnico Superior en Producción de Eventos</option>
			                        	<option>Técnico Superior en Diseño de Interiores</option>
			                        	<option>Técnico Superior en Industria del Mueble</option>

			                        	<option disabled>Turismo </option>
			                        	<option>Técnico Superior en Gastronomía</option>
			                        	<option>Técnico Superior en Sistemas de Información Turística</option>
			                        	<option>Técnico Superior en Gestión de Alojamiento Turístico</option>
			                        	<option>Técnico Superior en Alimentos y Bebidas</option>
			                        	<option>Técnico Superior en Empresas de Intermediación Turística</option>
			                        	<option>Técnico Superior en Panadería y Repostería</option>

			                        	<option disabled >Industrial </option>
			                        	<option>Técnico Superior en Tecnologías de Manufactura</option>
			                        	<option>Técnico Superior en Logística</option>

			                        	<option disabled>Contrucción </option>
			                        	<option>Técnico Superior en Construcción</option>
			                        	<option>Técnico Superior en Plomería</option>

			                        	<option disabled >Electromecánica </option>
			                        	<option>Técnico Superior Mecatronica</option>
			                        	<option>Técnico Superior en Electrónica</option>
			                        	<option>Técnico Superior en Electricidad</option>
			                        	<option>Técnico Superior en Refrigeración</option>
			                        </select>
			                        <br>
			                    </div>
			                    <!-- Button -->
			                    {!! Form::submit('Crear Estudiante',['class' => 'btn btn-primary btn-block']) !!}
			                </fieldset>
						{!! Form::close() !!}
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection