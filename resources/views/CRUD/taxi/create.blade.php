@extends('layouts.principal')
@section('content')
    <div class="ibox-content">
        <a href="{{route('taxi.index')}}" class="btn btn-w-m btn-warning"><i class="fa fa-list-ol"></i>Listado de <strong>Taxis</strong></a>
        <div class="hr-line-dashed"></div>
        <hr>
        {!!Form::open(['route'=>['taxi.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

            @include('crud.taxi.formulario')

            {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
        {!!Form::close()!!}
    </div>
@endsection