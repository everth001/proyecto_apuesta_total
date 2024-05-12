@extends('layouts.app', ['activePage' => 'especialidad', 'titlePage' => __('Especialidad')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Especialidades</h4>
            </div>
            <div class="col-12 text-right">
                  <a href="#" class="btn btn-sm btn-primary" id="addEspe" onclick="FormEspe();">Añadir Especialidad</a>
                </div>
                <form method="post"  id="formularioD" class="form-horizontal">
                  @csrf
              <div class="card-body newform" id="newform">
                <div class="row" style="width:100%">
                  <label class="col-sm-2 col-form-label">{{ __('Especilidad') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="nespecialidad"  type="text" placeholder="{{ __('Especilidad') }}"  required="true" aria-required="true"/>
                      
                    </div>
                  </div>
                  <div class="col-sm-2">
                  <button type="submit" id="btnGuardar" class="btn btn-success">{{ __('Guardar') }}</button>
                  </div>
                </div>
              </div>
                  </form>
            <div class="card-body table-responsive" id="tableEspe">
              <h1 class="text-center text-secondary my-5">Cargando...</h1>

            </div>
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

<!-- <script src="{{ asset('material') }}/js/core/jquery.min.js"></script> -->
<script>
  $(function() {

    ListarEspe();

    function ListarEspe() {
      $.ajax({
        url: '{{ route('especialidad.buscar') }}',
        method: 'get',
        success: function(response){
          $("#tableEspe").html(response);
          $("table").DataTable({
            order: [0, 'asc']
          });
        }
      });
    }
  $("#formularioD").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#btnGuardar").text('Guardando...');
        $.ajax({
          url: '{{ route('especialidad.crear') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Guardado',
                'Especialidad guardada con exito!',
                'success'
              )
              FormEspe();
              ListarEspe();
            }
            $("#btnGuardar").text('Guardar');
            $("#formularioD")[0].reset();
            
           
          }
        });
      });
      $(document).on('click', '.editEspe', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('especialidad.edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#nespecialidad").val(response.nespecialidad);
            $("#esp_id").val(response.id);
     
          }
        });
      });
      $("#edit_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_btn").text('Acutalizando...');
        $.ajax({
          url: '{{ route('especialidad.update') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Actualiazado',
                'Especialidad actualizada con exito!',
                'success'
              )
              ListarEspe();
            }
            $("#edit_btn").text('Actualizando');
            $("#edit_form")[0].reset();
            $("#editModal").modal('hide');
          }
        });
      });
      $(document).on('change', '.condicionCheckbox', function() {
        let id = $(this).attr('id');
        var condicion = $(this).is(':checked') ? '0' : '1';
        $.ajax({
          method: 'POST',
            url: '{{ route('especialidad.cambiarCondicion') }}', // Ajusta la ruta a tu controlador y método
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                condicion: condicion
            },
            success: function(response) {
              
            }
        });
    });

    });
  </script>

@endsection