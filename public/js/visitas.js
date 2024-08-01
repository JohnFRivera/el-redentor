let table = new DataTable('#myTable', {
    language: {
        "emptyTable":     "No hay datos disponibles en la tabla",
        "info":           "Mostrando _START_ a _END_ de _TOTAL_ visitas",
        "infoEmpty":      "Mostrando 0 a 0 de 0 visitas",
        "infoFiltered":   "(filtrado de _MAX_ visitas totales)",
        "lengthMenu":     "Mostrar _MENU_ visitas",
        "loadingRecords": "Cargando...",
        "search":         "Buscar: ",
        "zeroRecords":    "No se encontraron registros coincidentes",
    },
    order: {
        idx: 3,
        dir: 'asc'
    }
});
let inpFecha = document.getElementById("fecha");
let inpHoraInicio = document.getElementById("hora_inicio");
let inpHoraFin = document.getElementById("hora_fin");
//Procesos
const validDate = (e) => {
    var day = new Date(e.target.valueAsDate).getDay()
    if (day < 6) {
        e.target.value = "";
    }
}
const validTime = (e) => {
    var time = e.target.value.split(":")
    if (parseInt(time[0]) < 14 || parseInt(time[0]) > 17) {
        e.target.value = "";
    }
}
//Eventos
inpFecha.addEventListener("input", validDate)
inpHoraInicio.addEventListener("input", validTime)
inpHoraFin.addEventListener("input", validTime)