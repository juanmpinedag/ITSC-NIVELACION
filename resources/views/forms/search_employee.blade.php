<div class="input-group">
    {!!Form::open(['method'=>'GET','url'=>'employees_s','role'=>'search'])!!}
    <div class="input-group-btn">
        <input class="form-control" name="employeeSearch" placeholder="Buscar por nombre y apellido" type="text">
            {!! Form::submit('Buscar', ['class' => 'btn btn-danger']) !!}
        </input>
    </div>
</div>