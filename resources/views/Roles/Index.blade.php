@extends('Index')

@section('Contenido')

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @can('crear-rol')
                        <a class="btn btn-warning" href="{{route('roles.create')}}">Crear Rol</a>
                    @endcan

                    <table class="table table-striped mt-2">
                        <thead style="background-color: #67b2ef">
                            <th style="color: #ffff;">Rol</th>
                            <th style="color: #ffff;">Acciones</th>

                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                                <tr>
                                    <td>{{$rol->name}}</td>
                                    <td>
                                        @can('editar-rol')
                                            <a href="{{route('roles.edit',$rol->id)}}" class="class">Editar</a>
                                        @endcan

                                        @can('borrar-rol')
                                            {!! Form::open(['method'=>'DELETE','route'=>['roles.destroy',$rol->id],'style'=>'display:inline']) !!}

                                                {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}

                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>

                    </table>



                </div>

            </div>

        </div>

    </div>
</div>
@endsection