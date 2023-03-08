@extends('layouts/main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-around">
                    <h1>Crud Computadoras</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <a  class="btn btn-success" href="/agregar">Agregar nueva computadora</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Ram</th>
                            <th scope="col">Procesador</th>
                            <th scope="col">Disco Duro</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->ram}}</td>
                            <td>{{$item->procesador}}</td>
                            <td>{{$item->discoduro}}</td>
                            <td><a href="{{route('editar',$item->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="{{route('eliminar',$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection