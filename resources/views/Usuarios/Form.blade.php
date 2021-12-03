@extends('Index')

@section('Contenido')


<center>

    <h1>estamos en el form</h1>
</center>
        @if($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>¡Revise los Campos</strong>
                @foreach($errors->all() as $error)
                    <span class="badge badge-danger">{{$error}}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @endif


        
         {!! Form::open(array('route'=>'usuarios.store','method'=>'POST')) !!}
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="cedula">Cedula</label>
                    {!! Form::number('cedula',null,array('class'=>'form-control'))!!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    {!! Form::text('nombre',null,array('class'=>'form-control'))!!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    {!! Form::text('apellido',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="celular">Celular</label>
                    {!! Form::number('celular',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    {!! Form::number('telefono',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    {!! Form::email('correo',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    {!! Form::text('direccion',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    {!! Form::password('password',null,array('class'=>'form-control'))!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <label for="cedula">Roles</label>
                        {!! Form::select('usuarios[]', $usuarios,[], array('class'=> 'form-control'))!!}
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

         </div>
         {!! Form::close() !!}
            

            

            
    
                     
    
    @endsection