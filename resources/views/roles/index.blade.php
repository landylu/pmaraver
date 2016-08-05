@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Roles</h3>
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
                        <th>Descripcion</th>
                        <th>Estatus</th>

                    </tr>
                    @foreach ($roles as $rol)
                    <tr>
                        <td>

                            {!!link_to_route('roles.edit', $title = '', $parameters = $rol->id, $attributes = ['class'=>'fa fa-edit'] )!!}  
                           
                        </td>
                        <td>{!!$rol->id!!}</td>
                        <td>{!!$rol->name!!}</td>
                        <td>{!!$rol->description!!}</td>
                        <td> <?php
                            if ($rol->status == 1) {
                                echo "<span class='label label-success'>Activo</span>";
                            } else {
                                echo "<span class='label label-danger'>Inactivo</span>";
                            }
                            ?>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection