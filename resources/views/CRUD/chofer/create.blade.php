@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <a href="{{route('chofer.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Nivel Académico</strong></a>
        <div class="hr-line-dashed"></div>
        <hr>
        {!!Form::open(['route'=>['chofer.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

            @include('crud.chofer.formulario')

            {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
        {!!Form::close()!!}
    </div>
@endsection