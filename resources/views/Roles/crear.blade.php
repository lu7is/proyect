@extends('Index')

@section('Contenido')

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>¡Revise los Campos</strong>
                        @foreach($errors->all() as $error)
                            <span class="badge badge-warning">{{$error}}</span>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                 @endif

                 {!! Form::open(array('route'=>'roles.store','method'=>'POST')) !!}
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <label for="cedula">Nombre del Rol</label>
                            {!! Form::text('name',null,array('class'=>'form-control'))!!}
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <label for="">Permisos</label>
                            <br>
                            @foreach ($permisos as $value)
                                <label for="">{!! Form::checkbox('permisos[]',$value->id,false,array('class'=>'name'))!!}
                                 {{$value->name}}   </label>
                            <br>
                            @endforeach
                        </div>
                    </div>
        
                    
                   
                    
                     <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
        
                 </div>
                 {!! Form::close() !!}



                </div>

            </div>

        </div>

    </div>
</div>
@endsection