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
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('anio','Año',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('anio',null,['class'=>'form-control','placeholder'=>'Ej: 2015','required'])!!}         
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('color','Color',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('color',null,['class'=>'form-control','placeholder'=>'Ej: Rojo, Azul','required'])!!}         
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('numero_asientos','N° Asientos',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('numero_asientos',null,['class'=>'form-control','placeholder'=>'Ej: 5','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('numero_puertas','N° Puertas',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('numero_puertas',null,['class'=>'form-control','placeholder'=>'Ej: 4','required'])!!}      
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('con_parrilla','Con Parrilla',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-12">
                    {!!Form::select('con_parrilla', [0=>'No',1=>'Si'], null, ['class'=>'form-control','placeholder' => 'Seleccione una Opción...','required'])!!}      
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('con_aire','Con Aire',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::select('con_aire', [0=>'No',1=>'Si'], null, ['class'=>'form-control','placeholder' => 'Seleccione una Opción...','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('codigo_ruat','Codigo de ruat',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-12">
                    {!!Form::text('codigo_ruat',null,['class'=>'form-control','placeholder'=>'Ej: 1231314','required'])!!}      
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('ci_chofer','Chofer',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::select('ci_chofer',$choferes,null,['class'=>'form-control','placeholder' => 'Seleccione un Chofer...','required'])!!}      
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('ci_propietario','Propietario',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::select('ci_propietario',$propietarios,null,['class'=>'form-control','placeholder' => 'Seleccione un Propietario...','required'])!!}
                </div>
            </div>
        </div>
        <hr>