        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('ci','Carnet de Identidad',['class'=>'col-sm-8 control-label'])!!}
                <div class="col-sm-8">
                    {!!Form::text('ci',null,['class'=>'form-control','placeholder'=>'Ej: 123456789','required'])!!}      
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('nombres','Nombre(s)',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ej: Joaquin Luis','required'])!!}      
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('apellidos','Apellido(s)',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ej: Chumacero Gonzales','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('fecha_nacimiento','Fecha de Nacimiento',['class'=>'col-sm-8 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::date('fecha_nacimiento', \Carbon\Carbon::now(),['class'=>'form-control','required'])!!}      
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('apellidos','Sexo',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    {!!Form::radio('sexo','F', true)!!}Femenino&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    {!!Form::radio('sexo','M', false)!!}Masculino 
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('direccion','Dirección',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ej: Av. 26 de Fecbrero','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                {!!Form::label('telefono','Teléfono',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ej: 33344556','required'])!!}      
                </div>
            </div>
            <div class="col-sm-4">
                {!!Form::label('correo_electronico','Correo Electrónico',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::email('correo_electronico',null,['class'=>'form-control','placeholder'=>'Ej: Ejemplo@gmail.com','required'])!!}      
                </div>
            </div>
            <div class="col-sm-5">
                {!!Form::label('foto','Foto',['class'=>'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::file('foto',null,['class'=>'form-control','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
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
            <div class="col-sm-5">
                {!!Form::label('foto_licencia','Foto de la Licencia',['class'=>'col-sm-12 control-label'])!!}
                <div class="col-sm-10">
                    {!!Form::file('foto_licencia',null,['class'=>'form-control','required'])!!}      
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