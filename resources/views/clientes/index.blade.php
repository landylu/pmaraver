@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clientes</h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Acciones</th>
                        <th>Sucursal</th>
                        <th>Tipo Cliente</th>
                        <th>Forma Pago</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Colonia</th>
                        <th># Int</th>
                        <th># Ext</th>
                        <th>CP</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Estatus</th>                       
                    </tr>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>
                            {!!link_to_route('clientes.edit', $title = '', $parameters = $cliente->ClienteId, $attributes = ['class'=>'fa fa-edit'] )!!}  
                            {!!Form::open(['route'=>['clientes.destroy', $cliente->ClienteId], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>
                            {!!Form::close()!!}

                        </td>
                        <td>{!!$sucursal[$cliente->SucursalId]!!}</td>
                        <td>{!!$tipocliente[$cliente->TipoClienteId]!!}</td>
                        <td>{!!$fp[$cliente->FormaPagoId]!!}</td>
                        <td>{!!$cliente->Nombres!!}</td>
                        <td>{!!$cliente->ApellidoPaterno!!}</td>
                        <td>{!!$cliente->ApellidoMaterno!!}</td>
                        <td>{!!$estado[$cliente->Estado]!!}</td>
                        <td>{!!$cliente->Municipio!!}</td>
                        <td>{!!$cliente->Colonia!!}</td>
                        <td>{!!$cliente->numInt!!}</td>
                        <td>{!!$cliente->numExt!!}</td>
                        <td>{!!$cliente->CP!!}</td>
                        <td>{!!$cliente->Telefono!!}</td>
                        <td>{!!$cliente->Email!!}</td>
                        <td><?php
                            if ($cliente->Estatus == 1) {
                                echo "<span class='label label-success'>Activo</span>";
                            } else {
                                echo "<span class='label label-danger'>Inactivo</span>";
                            }
                            ?></td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection