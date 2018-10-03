@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <div class="hr-line-dashed"></div>
        {!! Form::model($chofer, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['chofer.update', $chofer->id]]) !!}
            <div class="row">
                <div class="col-sm-3">
                    {!!Form::label('licencia','Licencia',['class'=>'col-sm-8 control-label'])!!}
                    <div class="col-sm-8">
                        {!!Form::text('licencia',null,['class'=>'form-control','placeholder'=>'Ej: 124323','required'])!!}      
                    </div>
                </div>
                <div class="col-sm-4">
                    {!!Form::label('cod_antecedentes','Código de Antecedentes',['class'=>'col-sm-12 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::text('cod_antecedentes',null,['class'=>'form-control','placeholder'=>'Ej: 423524','required'])!!}      
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    {!!Form::label('imei','IMEI',['class'=>'col-sm-8 control-label'])!!}
                    <div class="col-sm-8">
                        {!!Form::text('imei',null,['class'=>'form-control','placeholder'=>'Ej: 42453','required'])!!}      
                    </div>
                </div>
                <div class="col-sm-4">
                    {!!Form::label('password','Contraseña',['class'=>'col-sm-2 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::password('password',['class'=>'form-control','required'])!!}      
                    </div>
                </div>
            </div>
            <hr>
            <div class="hr-line-dashed"></div>
            {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-default'])!!}
        {!!Form::close()!!}
    </div>
@endsection