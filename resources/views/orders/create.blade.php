@extends('layouts.template')

@section('title','Login')

@section('content')

 <div class="container mt-2 border p-2 rounded ">
    <h2>Crear Nueva Orden</h2>
    <hr>
    <form action="{{route('orders.store')}}" method="POST">
      @csrf
      @include('layouts.partials.messages')
      <input type="hidden" value="{{auth()->user()->id}}" name="id_user">
      <div class="row">  
        <div class="col-6 mb-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Fecha de Asignacion</label>
            <input type="date" class="form-control" name="fecha"  placeholder="">
          </div>
        </div>

        <div class="col-6 mb-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Numero de Orden</label>
            <input type="text" class="form-control" id="" name="ot"  placeholder="">
          </div>
        </div>

        <div class="col-4 mb-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Bol</label>
            <input type="text" class="form-control" name="bol" placeholder="">
          </div>
        </div>

        <div class="col-8 mb-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Tipo de Orden</label>
            <input type="text" class="form-control" name="tot"  placeholder="">
          </div>
        </div>

        <div class="col-4 mb-3">
          <div class="form-floating">
            <select class="form-select" name="sede" aria-label="Floating label select example">
              <option selected hidden>Seleccione Sede</option>
              <option value="1">Jamundi</option>
              <option value="2">Palmira</option>
              <option value="3">Buga</option>
              <option value="3">Tulua</option>
              <option value="3">Zarzal</option>
              <option value="3">Chaparral</option>
            </select>
            <label for="floatingSelect">Sede</label>
          </div>
        </div>

        <div class="col-4 mb-3">
          <div class="form-floating">
            <select class="form-select" name="proceso" aria-label="Floating label select example">
              <option selected hidden>Seleccione Proceso</option>
              <option value="1">MTTO</option>
              <option value="2">OYMM</option>
              <option value="3">LYR</option>
              <option value="3">OBRAS</option>
              <option value="3">SILVICULTURA</option>
            </select>
            <label for="floatingSelect">Proceso</label>
          </div>
        </div>

        <div class="col-4 mb-3">
          <div class="form-floating">
            <select class="form-select" name="contrato" aria-label="Floating label select example">
              <option selected hidden>Contrato</option>
              <option value="1">1983 Valle Sur Integral</option>
            </select>
            <label for="floatingSelect">Contrato</label>
          </div>
        </div>
       

        <div class="col-12 mb-3">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Observacion</label>
          </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="" class="btn btn-secondary">Cancelar</a>
          <button class="btn btn-success me-md-2" type="submit">Guardar</button>
        </div>

      </div>

    </form>
 </div>
@endsection
