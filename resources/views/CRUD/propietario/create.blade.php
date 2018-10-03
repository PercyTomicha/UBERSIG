@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <a href="{{route('propietario.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Propietarios</strong></a>
        <div class="hr-line-dashed"></div>
        <hr>
        {!!Form::open(['route'=>['propietario.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

            @include('crud.propietario.formulario')

            {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
        {!!Form::close()!!}
    </div>
@endsection