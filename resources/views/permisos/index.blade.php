@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Permisos</h3>
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Estatus</th>
                    </tr>
                    @foreach ($permiso as $per)
                    <tr>
                        <td>
                            {!!link_to_route('permisos.edit', $title = '', $parameters = $per->id, $attributes = ['class'=>'fa fa-edit'] )!!}  
                            {!!Form::open(['route'=>['permisos.destroy', $per->id], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>
                            {!!Form::close()!!}
                        </td>
                        <td>{!!$per->id!!}</td>
                        <td>{!!$per->name!!}</td>
                        <td>{!!$per->description!!}</td>
                        <td> <?php
                            if ($per->status == 1) {
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