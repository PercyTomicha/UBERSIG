@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <div class="hr-line-dashed"></div>
        {!! Form::model($propietario, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['propietario.update', $propietario->id]]) !!}
            <div class="hr-line-dashed"></div>
            {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-default'])!!}
        {!!Form::close()!!}
    </div>
@endsection