@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="{{route('chofer.create')}}" class="btn btn-w-m btn-success"><i class="fa fa-plus"></i> Agregar Nuevo <strong>Chofer</strong></a>
                    </div>
                    <hr>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>CI</th>
                                        <th>Nombre Completo</th>
                                        <th>Licencia</th>
                                        <th>Código de Antecedentes</th>
                                        <th>IMEI</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($choferes as $ch)
                                    <tr class="gradeX">
                                        <td>{{$ch->CI}}</td>
                                        <td>{{$ch->nombres}} {{$ch->apellidos}}</td>
                                        <td>{{$ch->licencia}}</td>
                                        <td>{{$ch->cod_antecedentes}}</td>
                                        <td>{{$ch->imei}}</td><!--"{{ route('chofer.edit',$ch->ci) }}"-->
                                        <td><a class="btn btn-w-m btn-info" href="#"><i class="ti-pencil-alt"></i> Editar</a>
                                            <!--{!! Form::open(['method' => 'DELETE','route' => ['chofer.destroy', $ch->ci],'style'=>'display:inline']) !!}-->
                                                {{Form::button('<i class=" ti-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-w-m btn-danger'] )  }}
                                            <!--{!! Form::close() !!}-->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>CI</th>
                                        <th>Nombre Completo</th>
                                        <th>Licencia</th>
                                        <th>Código de Antecedentes</th>
                                        <th>IMEI</th>
                                    </tr>
                                    <!--
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    -->
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection