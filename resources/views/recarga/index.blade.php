@extends('layouts.app', ['activePage' => 'recarga', 'titlePage' => __('Recargas')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Listar Recargas</h4>
                    </div>
                    <div class="col-12 text-right">
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#mdAgregarRecarga">Realizar Recarga</a>
                    </div>
                    <form method="post" id="formularioD" class="form-horizontal">
                        @csrf
                        <div class="card-body newform" id="newform">
                            <div class="row" style="width:100%">
                                <label class="col-sm-2 col-form-label">{{ __('Especilidad') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="nespecialidad" type="text" placeholder="{{ __('Especilidad') }}" required="true" aria-required="true" />

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" id="btnGuardar" class="btn btn-success">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body table-responsive">
                        <table id="tb_listar_recarga" class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>Id</th>
                                    <th>Tipo Documento</th>
                                    <th>Num. Documento</th>
                                    <th>Cliente</th>
                                    <th>Canal</th>
                                    <th>Tipo Moneda</th>
                                    <th>Monto</th>
                                    <th>Voucher</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdAgregarRecarga" tabindex="-1" aria-labelledby="myModalLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Recarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="form_recarga">
                @csrf
                <input type="hidden" name="idCliente" id="idCliente">
                <input type="hidden" name="idTipoMoneda" id="idTipoMoneda">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="lbDni">Numero de Documento</label>
                            <div class="input-group no-border">
                                <input type="text" id="dni" value="" class="form-control" required>
                                <button type="button" id="btnFindCliente" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="lbNombre">Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="lbApellido">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="lbTipoMoneda">Tipo de Moneda</label>
                            <input type="text" name="tipoMoneda" id="tipoMoneda" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="lbSaldo">Saldo Actual</label>
                            <input type="text" name="saldo" id="saldo" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label for="lbCanal">Canal</label>
                            <!-- <input type="text" name="canal" id="canal" class="form-control" required> -->
                            <select class="form-control" id="canal">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label for="lbSaldoAbonado">Saldo Abonado</label>
                            <input type="text" name="saldoAbonado" id="saldoAbonado" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label for="lbVoucher">Voucher</label>
                            <input type="file" name="voucher" id="voucher" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGuardarRecarga" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        load_tb_listar_recarga();
        load_canal();
    });

    function load_tb_listar_recarga() {
        $("#tb_listar_recarga").DataTable({
            "columnDefs": [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }],
            "searching": true,
            "lengthChange": true,
            pageLength: 10,
            destroy: true,
            order: [
                [0, "asc"]
            ],
            om: 'lfBrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel'
            ],
            language: {
                "emptyTable": "No hay datos disponibles en la tabla.",
                "info": " Del _START_ al _END_ de _TOTAL_ ",
                "infoEmpty": "Mostrando 0 registros de un total de 0.",
                "infoFiltered": "(filtrados de un total de _MAX_ registros)",
                "infoPostFix": "(actualizados)",
                "lengthMenu": "Mostrar _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "searchPlaceholder": "",
                "zeroRecords": "No se han encontrado coincidencias.",
                paginate: {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": {
                "url": `{{ route('listar.recarga') }}`,
                'type': 'get',
                "dataSrc": ""
            },
            "columns": [{
                    "data": "id",
                    className: "text-center"
                },
                {
                    "data": "tipo_documento",
                    className: "text-center"
                },
                {
                    "data": "numero_documento",
                    className: "text-center"
                },
                {
                    "data": "nombres",
                    className: "text-center"
                },
                {
                    "data": "tipo_canal",
                    className: "text-center"
                },
                {
                    "data": "tipo_moneda",
                    className: "text-center"
                },
                {
                    "data": "monto",
                    className: "text-center"
                },
                {
                    "data": "voucher",
                    className: "text-center"
                },
                {
                    "data": "created_at",
                    className: "text-center"
                }
            ]
        })
    }

    function load_canal() {
        $("#canal").append(new Option("Seleccione una opcion", ""));
        $.ajax({
            url: `{{ route('listar.canal') }}`,
            method: 'get',
            success: function(response) {
                response.forEach(element => {
                    $("#canal").append(new Option(element.tipo_canal, element.id));
                });
            }
        });
    }

    $("#btnFindCliente").click(function() {
        var dni = $("#dni").val();

        if (dni.trim() !== "") {
            $.ajax({
                url: `{{ route('buscar.cliente') }}`,
                method: 'get',
                data: {
                    "numero_documento": dni
                },
                success: function(response) {
                    $('#dni').prop('disabled', true);

                    $("#idCliente").val(response.id);
                    $('#idCliente').prop('disabled', true);

                    $("#nombres").val(response.nombres);
                    $('#nombres').prop('disabled', true);

                    $("#apellidos").val(response.apellidos);
                    $('#apellidos').prop('disabled', true);

                    $("#idTipoMoneda").val(response.tipo_moneda_id);
                    $("#idTipoMoneda").val(response.tipo_moneda_id);

                    $("#tipoMoneda").val(response.tipo_moneda);
                    $('#tipoMoneda').prop('disabled', true);

                    $("#saldo").val(response.saldo);
                    $('#saldo').prop('disabled', true);
                }
            });
        } else {
            Swal.fire('Error', 'El campo numero de documento es obligatorio', 'error');
        }
    });

    $("#form_recarga").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("cliente_id", $("#idCliente").val());
        formData.append("canal_id", $("#canal").val());
        formData.append("tipo_moneda_id", $("#idTipoMoneda").val());
        formData.append("monto", $("#saldoAbonado").val());
        formData.append("voucher", "Aqui va la URL del vaucher");

        $.ajax({
            url: `{{ route('crear.recarga') }}`,
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status == 200) {
                    $("#mdAgregarRecarga").modal('hide');
                    Swal.fire('Actualiazado', 'Especialidad actualizada con exito!', 'success')
                    $('#form_recarga')[0].reset();
                    load_tb_listar_recarga();
                    habilitarCampos();
                }
            }
        });
    });

    function habilitarCampos() {
        $('#dni').prop('disabled', false);
        $('#idCliente').prop('disabled', false);
        $('#nombres').prop('disabled', false);
        $('#apellidos').prop('disabled', false);
        $('#tipoMoneda').prop('disabled', false);
        $('#saldo').prop('disabled', false);
    }
</script>
@endsection