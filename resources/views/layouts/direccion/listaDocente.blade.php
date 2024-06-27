@extends('plantilla')
@section('contenido')
<div class="container mt-4 mb-5">
    <h1 class="GosorDeLetraHome text-center mt-4" data-aos="zoom-in"><b><i class="fa-solid fa-users-rectangle text-verde2 me-2"></i>Listado De Docentes</b></h1>
    <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">
    <div class="row">
        <div class="col" data-aos="zoom-in">
            <div class="table-responsive">
                <table class="table table-md table-hover table-responsive-lg mt-3 text-center shadow-sm rounded" id="contenido_tabla">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center" scope="col">Nombre(s)</th>
                            <th class="text-center" scope="col">Ap. Paterno</th>
                            <th class="text-center" scope="col">Ap. Materno</th>                       
                            <th class="text-center" scope="col">Estado</th>
                        </tr>
                    <thead>   
                    <tbody> 
                        @foreach($consulta as $persona)
                            <tr>
                                <td class=""><b>{{$persona['nombre']}}</b></td>
                                <td class=" align-middle"><b>{{$persona['apellido_paterno']}}</b></td>
                                <td class="align-middle"><b>{{$persona['apellido_materno']}}</b></td>
                                @if($persona['estado'] != 0)
                                <td class="align-middle"><b><span class="text-success" title="Habilitada"><i class="fa-regular fa-circle-check"></i></span></b></td>
                                @else
                                <td class="align-middle"><b><span class="text-danger" title="Deshabilitada"><i class="fa-solid fa-ban"></i></span></b></td>
                                @endif
                            </tr>
                        @endforeach                       
                    </tbody>                
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(() =>{
        $('#contenido_tabla').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>
@endsection('contenido')
