@extends('layouts.landingPage');

@section('title', 'Editar Profesor')
@section('title-content', 'Editar Profesor')
@section('content')
	<div id="content" class="jumbotron main">
		<h1 class="text-center padding ">Profesor</h1>
		<div class="container">
			<div class="row">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2 class="panel-title">editar Profesor</h2>
					</div>
					<div class="panel-body">
						{!! Form::model($users,['route' =>  ['teachers.update',$users->id], 'method' => 'PUT']) !!}
			                <fieldset class="col-sm-10 col-sm-offset-1">
			                    <!-- Form Name -->
			                    <!-- Prepended text-->
			                    {!!Form::token()!!}


			                    <h4>Información del profesor</h4>

                                <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="names">Nombres</label>
			                        <input type="text" class="form-control" id="names" name="names" placeholder="Nombres profesor" value='{{$users->names}}'>
			                    </div>
			                    <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="last_names">Apellidos</label>
			                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos profesor" value='{{$users->last_name}}'>
			                    </div>

                                <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="status">Estado de Usuario</label>
			                        <select id="status" name="status" class="form-control">
                                        @if ($users->status == 1)
                                        <option selected value=1>Activo</option>
			                        	<option value=0>Inactivo</option>
                                        @endif    

                                        @if ($users->status == 0)
                                        <option selected value=0>Inactivo</option>
			                        	<option value=1>Activo</option>
                                        @endif

			                        </select>
			                    </div>


								<div class="form-group col-sm-6">
							  <label class="control-label" for="gender">Genero</label>
			                    <select id="gender" name="gender" class="form-control">

									@if ($users->gender == 'Hombre')
			                        	<option  selected value ='Hombre'>Hombre</option>
			                        	<option value='mujer'>Mujer</option>
									@endif

									@if ($users->gender == 'Mujer')
										<option  selected value ='Mujer'>Mujer</option>
			                        	<option value='Hombre'>Hombre</option>
									@endif

			                    </select>
								</div>

			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="nombres">Identificación</label>
			                        <input type="text" class="form-control" id="identity_card" name="identity_card" placeholder="identificacion" value='{{$users->identity_card}}'>
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="personal_phone">Telefono</label>
			                        <input type="text" class="form-control" id="personal_phone" name="personal_phone" placeholder="telefono profesor" value='{{$users->personal_phone}}'>
			                    </div>
			                    <div class="form-group col-sm-6">
			                        <label class="control-label" for="cellphone">Celular</label>
			                        <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="movil profesor" value='{{$users->cellphone}}'>
			                    </div>
								 <div class="form-group col-sm-6">
			                        <label class="control-label" for="civil_status">Estado Civil</label>
			                        <select id="civil_status" name="civil_status" class="form-control">
			                        	<option  selected value='{{$users->civil_status}}'>{{$users->civil_status}}</option>
			                        	<option>Soltero/a</option>
			                        	<option>Casado/a</option>
			                        	<option>Comprometido/a</option>
			                        	<option>Divorciado/a</option>
			                        	<option>Viudo/a</option>
			                        </select>
			                    </div>
								<div class="form-group col-sm-6">
			                        <label class="control-label" for="address">Direccion</label>
			                        <input type="text" class="form-control" id="address" name="address" placeholder="Direccion del profesor" value='{{$users->address}}'>
			                    </div>

                                <!--Usuario-->
                                <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="email">Email</label>
			                        <input type="text" class="form-control" id="email" name="email" placeholder="email profesor" value='{{$users->email}}'>
			                    </div>
                                 <div class="form-group col-sm-6 ">
			                        <label class="control-label" for="password">Contraseña</label>
			                        <input type="text" class="form-control" id="password" name="password" placeholder="contraseña" value='{{$users->password}}'>
			                    </div>
                                
			                    {!! Form::submit('Editar Profesor',['class' => 'btn btn-primary btn-block']) !!}
			                </fieldset>
						{!! Form::close() !!}
						<hr>
					</div>
                     
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
        	$('#identity_card').inputmask({"mask": "999-9999999-9"});
            $('#cellphone').inputmask({"mask": "999-999-9999"})
            $('#personal_phone').inputmask({"mask": "999-999-9999"})
      	});
	</script>
@endsection