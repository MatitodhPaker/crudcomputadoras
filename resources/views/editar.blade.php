@extends('layouts/main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-around">
                    <h1>Editar Computadora</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <form action="{{route('update',$item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$item->nombre}}" placeholder="patobook">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="{{$item->marca}}" placeholder="patito">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="{{$item->modelo}}" placeholder="pato">
                    </div>
                    <div class="mb-3">
                        <label for="ram" class="form-label">Ram</label>
                        <input type="text" class="form-control" id="ram" name="ram" value="{{$item->ram}}" placeholder="3GB">
                    </div>
                    <div class="mb-3">
                        <label for="procesador" class="form-label">Procesador</label>
                        <input type="text" class="form-control" id="procesador" name="procesador" value="{{$item->procesador}}" placeholder="pato i5">
                    </div>
                    <div class="mb-3">
                        <label for="dicoduro" class="form-label">Disco Duro</label>
                        <input type="text" class="form-control" id="dicoduro" name="dicoduro" value="{{$item->discoduro}}" placeholder="125GB">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 ">
                            <a href="/" class="btn btn-info mt-4 container-fluid">Regresar</a>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-warning mt-4 container-fluid">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection