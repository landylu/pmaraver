@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Asignacion de Roles y Permisos </h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                        <input type="text" name="table_search" class="form-contpermiso input-sm pull-right" placeholder="Search">
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
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Permiso</th>
                    </tr>
                    @foreach($roles as $rol)

                    <tr>
                        <td>
                            {!!link_to_route('asignar-permisos.edit', $title = '',$parameters = $rol->id, $attributes = ['class'=>'fa fa-edit'] )!!}  
                            {!!Form::open(['route'=>['asignar-permisos.destroy', $rol->id], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>
                            {!!Form::close()!!}
                        </td>
                        <td>{!!$usuario[$rol->user_id]!!}</td>
                        <td>{!!$rolname[$rol->role_id]!!}</td>
                        <td>{!!$permiso[$rol->permission_id]!!}</td>                       
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection