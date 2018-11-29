@extends('layouts.principal')
@section('content')
     <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                         <a href="{{route('taxi.create')}}" class="btn btn-w-m btn-success"><i class="fa fa-plus"></i> Agregar Nuevo <strong>Vehiculo</strong></a>
                        </div>
                    <hr>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Placa</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>N° asientos</th>
                    
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($taxi as $tx)
                                    <tr class="gradeX">
                                        <td>{{$tx->placa}}</td>
                                        <td>{{$tx->marca}} </td>
                                        <td>{{$tx->modelo}}</td>
                                        <td>{{$tx->numero_asientos}}</td>
                                      
                                    
                                        <td><a class="btn btn-w-m btn-info" href="#"><i class="ti-pencil-alt"></i> Editar</a>
                                            {{Form::button('<i class=" ti-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-w-m btn-danger'] ) }}
                                         </td>
                                    
                                    </tr>
                                @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
