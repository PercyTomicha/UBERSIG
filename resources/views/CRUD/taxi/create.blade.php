@extends('layouts.principal')
@section('content')
{!!Form::open(['route'=>['taxi.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

<div class="row">
                <div class="col-sm-3">
                    {!!Form::label('placa','Placa',['class'=>'col-sm-8 control-label'])!!}
                    <div class="col-sm-8">
                        {!!Form::text('placa',null,['class'=>'form-control','placeholder'=>'Ej: 3520YPF','required'])!!}      
                    </div>
                </div>
                <div class="col-sm-4">
                    {!!Form::label('marca','Marca',['class'=>'col-sm-2 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ej: Toyota','required'])!!}      
                    </div>
                </div>
                <div class="col-sm-5">
                    {!!Form::label('modelo','Modelo',['class'=>'col-sm-2 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::text('modelo',null,['class'=>'form-control','placeholder'=>'Ej: Corolla','required'])!!}      
                    </div>
                </div>

     <hr>
     
            <div class="col-sm-3">
                {!!Form::label('anio','Año',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('anio',null,['class'=>'form-control','placeholder'=>'Ej: 2015','required'])!!}      
                </div>

            </div>
            <div class="col-sm-5">
                {!!Form::label('numero_asientos','N°asientos',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-5">
                    {!!Form::text('numero_asientos',null,['class'=>'form-control','placeholder'=>'Ej: 5','required'])!!}      
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('numero_puertas','N°puertas',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-5">
                    {!!Form::text('numero_puertas',null,['class'=>'form-control','placeholder'=>'Ej: 4','required'])!!}      
                </div>
            </div>

              <div class="col-sm-3">
                <label for="">Con parrilla</label>
                <select name="con_parrilla" id="con_parrilla" class="form-control">
                        <option value="2">--Elegir una Opcion--</option>
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                </Select>
             </div>

             <div class="col-sm-3">
                <label for="">Con aire</label>
                <select name="con_aire" id="con_aire" class="form-control">
                        <option value="2">--Elegir una Opcion--</option>
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                </Select>
             </div>

            <div class="col-sm-3">
                    {!!Form::label('codigo_ruat','Codigo de ruat',['class'=>'col-sm-8 control-label'])!!}
                    <div class="col-sm-8">
                        {!!Form::text('codigo_ruat',null,['class'=>'form-control','placeholder'=>'Ej: 1231314','required'])!!}      
                    </div>
                </div>
        </div>

        <hr>

        <hr>

        {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
        


<div class="hr-line-dashed"></div>
{!!Form::close()!!}    
@endsection