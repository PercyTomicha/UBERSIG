@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="{{route('propietario.create')}}" class="btn btn-w-m btn-success"><i class="fa fa-plus"></i> Agregar Nuevo <strong>
                        Propietario</strong></a>
                    </div>
                    <hr>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>CI</th>
                                        <th>Nombre Completo</th>
                                        <th>Correo Electrónico</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($propietarios as $p)
                                    <tr class="gradeX">
                                        <td>{{$p->CI}}</td>
                                        <td>{{$p->nombres}} {{$p->apellidos}}</td>
                                        <td>{{$p->correo_electronico}}</td><!--"{{ route('chofer.edit',$p->ci) }}"-->
                                        <td><a class="btn btn-w-m btn-info" href="#"><i class="ti-pencil-alt"></i> Editar</a>
                                            <!--{!! Form::open(['method' => 'DELETE','route' => ['chofer.destroy', $p->ci],'style'=>'display:inline']) !!}-->
                                                {{Form::button('<i class=" ti-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-w-m btn-danger'] )  }}
                                            <!--{!! Form::close() !!}-->
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
@endsection