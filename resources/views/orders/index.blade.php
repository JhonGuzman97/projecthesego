@extends('layouts.template')

@section('title','Login')

@section('content')

    <div class="container mt-2 p-3 border rounded-4 bg-white">
        <div class="mt-4">
            <a href="{{route('orders.create')}}" class="btn btn-primary">Nueva Orden</a>
            <a href="" class="btn btn-success">Subir Ordenes</a>
            <a href="" class="btn fondohesego2">Subir Hojas de Entrada</a>
        </div>
        <div class="col-md-12 mt-2 ">
            <table class="table ">
                <thead class="fondohesego text-white">
                    <tr>
                        <td>Fecha</td>
                        <td>Orden</td>
                        <td>Tipo Orden</td>
                        <td>Estado</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $orden)
                    <tr>
                        <td>{{$orden->fecha}}</td>
                        <td>{{$orden->ot}}</td>
                        <td>{{$orden->tipo_orden}}</td>
                        <td>{{$orden->id_statu}}</td>
                        <td>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
