@extends('layouts.template')

@section('title','Login')

@section('content')

 <div class="container mt-2">
    <div class="row bg-white mb-3">
        <h1>Informacion Basica</h1>
        <hr>
        <div class="col-12 ">
            <form action="">
                <div class="row  mb-2">
                    <div class="col-md-4 form-group">
                        <label for="">Numero de orde</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Fecha Creacion</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Tipo de Orden</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row  mb-2">
                    <div class="col-md-3 form-group">
                        <label for="">Bol</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Pedido</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Hoja de entrada</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row  mb-2">
                    <div class="col-md-3 form-group">
                        <label for="">Valor Orden</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Valor Hoja de Entrada</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">% Diferencia</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Estado de La Orden</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row  mb-2">
                    <h3>Facturacion</h3>
                    <div class="col-md-4 form-group">
                        <label for="">Numero Factura</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Radicado</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Fecha Facturacion</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-2 text-center">
        <div class="col-12 ">
            <a href="" class="btn btn-success">Agregar Actividad</a>
            <a href="" class="btn btn-primary">Agregar MMOO</a>
            <a href="{{route('orders.index')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    <hr>
    <div class="row mt-2 bg-white">
        <h1>Bitacora</h1>
        <div class="col-12 ">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Actividad</th>
                        <th>Observaciones</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
 </div>
@endsection
