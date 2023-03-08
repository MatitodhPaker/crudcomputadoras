@extends('layouts/main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-around">
                    <h1>Eliminar Computadora</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <ul>
                    <li>Marca: {{$items->marca}}</li>
                    <li>Modelo: {{$items->modelo}}</li>
                    <li>Ram: {{$items->ram}}</li>
                    <li>Procesador: {{$items->procesador}}</li>
                    <li>Discoduro:{{$items->discoduro}}</li>
                    <form action="{{route('destroy',$items->id)}}" method="post">
                        <div class="row justify-content-center">
                            @csrf
                            @method('DELETE')
                            <div class="col-3 ">
                                <a href="/" class="btn btn-info mt-4 container-fluid">Regresar</a>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-danger mt-4 container-fluid">Eliminar Definitivo</button>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
    </div>
@endsection