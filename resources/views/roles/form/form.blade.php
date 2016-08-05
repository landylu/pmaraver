<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Rol</label>
    <div class="col-sm-10">
        {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Rol'])!!}
    </div>
</div>
<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
        {!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
    </div>
</div>
<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Nivel</label>
    <div class="col-sm-10">
        {!!Form::text('level',null,['class'=>'form-control', 'placeholder'=>'Nivel'])!!}
    </div>
</div>
<div class="form-group">
    <label for="estatus" class="col-sm-2 control-label">Estatus</label>
    <div class="col-sm-10">
        {!! Form::select('status', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
    </div>
</div>