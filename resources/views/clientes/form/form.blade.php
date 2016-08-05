<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Sucursal</label>
    <div class="col-sm-10">   
        {!! Form::select('SucursalId',$sucursal, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">   
        {!! Form::select('TipoClienteId',$tipocliente, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Pago</label>
    <div class="col-sm-10">   
        {!! Form::select('FormaPagoId',$fp, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Nombres</label>
    <div class="col-sm-10">   
        {!!Form::text('Nombres',null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Apellido Paterno</label>
    <div class="col-sm-10">   
        {!!Form::text('ApellidoPaterno',null,['class'=>'form-control', 'placeholder'=>'Apellido Paterno'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Apellido Materno</label>
    <div class="col-sm-10">   
        {!!Form::text('ApellidoMaterno',null,['class'=>'form-control', 'placeholder'=>'Apellido Materno'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-10">   
        {!! Form::select('Estado',$estado, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Municipio</label>
    <div class="col-sm-10">   
        {!!Form::text('Municipio',null,['class'=>'form-control', 'placeholder'=>'Municipio'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Colonia</label>
    <div class="col-sm-10">   
        {!!Form::text('Colonia',null,['class'=>'form-control', 'placeholder'=>'Colonia'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label"># Exterior</label>
    <div class="col-sm-10">   
        {!!Form::text('numExt',null,['class'=>'form-control', 'placeholder'=>'Num. Exterior'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label"># Interior</label>
    <div class="col-sm-10">   
        {!!Form::text('numInt',null,['class'=>'form-control', 'placeholder'=>'Num. Interior'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Codigo Postal</label>
    <div class="col-sm-10">   
        {!!Form::text('CP',null,['class'=>'form-control', 'placeholder'=>'Codigo Postal'])!!}
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">        
        <input type="text" class="form-control" placeholder="Telefono" name='Telefono' data-inputmask='"mask": "(999) 999-9999"' data-mask>
    </div>
</div>
<div class="form-group">
    <label for="materialNombre" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">   
        {!!Form::email('Email',null,['class'=>'form-control', 'placeholder'=>'Email'])!!}
    </div>
</div>
<div class="form-group">
    <label for="estatus" class="col-sm-2 control-label">Estatus</label>
    <div class="col-sm-10">
        {!! Form::select('Estatus', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
    </div>
</div>