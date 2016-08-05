@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Materiales </h3>
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
                        <th>Sucursal</th>
                        <th>Calidad</th>                     
                        <th>Tipo Material</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Fecha Ingreso</th>
                        <th>Material</th>
                        <th>Unidad de Medida</th>
                    </tr>  
                    @foreach($material as $mat)
                    <tr>
                        <td>                        
                            {!!link_to_route('material.edit', $title = '', $parameters = $mat->materialId, $attributes = ['class'=>'fa fa-edit'] )!!}  
<!--                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>   -->
                        </td>
                        <td>{!!$mat->materialId!!}</td>                  
                        <td>{!!$sucursal[$mat->sucursalId]!!}</td>
                        <td>{!!$calidad[$mat->calidadId]!!}</td>  
                        <td>{!!$tipo[$mat->tipoMaterialId]!!} </td>
                        <td>{!!$mat->stock!!}</td>
                        <td>{!!$mat->precio!!}</td>  
                        <td>{!!$mat->fechaIngreso!!} </td>
                        <td>{!!$mat->materialNombre!!} </td>
                        <td>{!!$mat->unidadDeMedida!!} </td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection