@extends('layouts.app', ['activePage' => 'calendar', 'titlePage' => __('Módulo de Calendario')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Calendario</h4>
            </div>
            <div id='calendar' style="padding: 25px"></div>
          </div>
        </div>
    </div>
  </div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="myModalLabel"
role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="POST" id="edit_form" >
        @csrf
        <input type="hidden" name="esp_id" id="esp_id">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="Lnespecialidad">Especialidad</label>
              <input type="text" name="nespecialidad" id="nespecialidad" class="form-control" placeholder="Especialidad" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
          <button type="submit" id="edit_btn" class="btn btn-success">Actualizar especialidad</button>
          
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'es',
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });
  </script>

@endsection