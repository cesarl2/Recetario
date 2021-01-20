@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis Recetas
                    <div class="text-right">
                        
                        <a href="{{ url('Add') }}"><input class="btn btn-success" type="button" value="Nueva Receta"></a>
                    </div>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($recipes as $recipe)
                    <!--Seccion de Recetas recientes-->
                    
                    <div class="container text-center col-10">
                        <div class="row">
                            <a href="{{ route('home.show', ['id'=>$recipe->id,'title'=>$recipe->title]) }}" >
                             
                                    <!--Columna Titulo-->
                                    <div class="col text-left">
                                        <p>{{ $recipe->title}}</p>
                                    </div>
                                    
                                    <!--Columna Imagen-->
                                    <div class="col">
                                        <img src="store_image/fetch_image/{{ $recipe->id }}"  class="img-thumbnail" width="75" />
                                    </div>
                                
                            </a>
                            
                            <!--Columna Editar -->
                            <div class="col">
                                <button type="submit" class="btn btn-primary"><a href="{{ route('home.edit',['id' => $recipe] )}}">Editar</a></button>
                            </div>
                            <!--Columna Eliminar -->
                            <div class="col">
                                <button type="submit" class="btn btn-primary">X</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
