$(document).ready(function(){
    $('#tabla').dataTable({ 
      language:{
        "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "Ningún dato disponible en esta tabla - lo siento",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrado de _MAX_ total de registros)",
      "search": "Buscar:",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      paginate: {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
        },
      }
    });
  })
  
$(document).ready( function () {
    $('#myTable').DataTable();
} );