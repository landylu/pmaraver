@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios</h3>
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                        <th>Rol</th>
                    </tr>
                    <?php
                    foreach ($usuarios as $user) {
                        ?>
                        <tr>
                            <td>
                                {!!link_to_route('usuario.edit', $title = '', $parameters = $user->usuarioId, $attributes = ['class'=>'fa fa-edit'] )!!}  
                                {!!Form::open(['route'=>['usuario.destroy', $user->usuarioId], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                                <button type="submit" class="btn btn-link">
                                    <i class="fa fa-trash-o fa-fw"></i> 
                                </button>
                                {!!Form::close()!!}
                            </td>
                            <td>{!!$user->usuarioId!!}</td>
                            <td>{!!$user->nombre!!}</td>
                            <td>{!!$user->apellidos!!}</td>
                            <td>{!!$user->email!!}</td>
                            <td>{!!$user->usuario!!}</td>
                            <td> <?php
                                if ($user->estatus == 1) {
                                    echo "<span class='label label-success'>Activo</span>";
                                } else {
                                    echo "<span class='label label-danger'>Inactivo</span>";
                                }
                                ?>
                            </td>
                            <td>{!!$roles[$user->tipo_usuario]!!}</td>
                        </tr>
                    <?php } ?>
                       
                    <!--endforeach-->
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection