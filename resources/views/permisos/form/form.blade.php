<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Permiso</label>
    <div class="col-sm-10">
        {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre Permiso'])!!}
    </div>
</div>
<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
        {!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
    </div>
</div>
<div class="form-group">
    <label for="estatus" class="col-sm-2 control-label">Estatus</label>
    <div class="col-sm-10">
        {!! Form::select('status', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
    </div>
</div>