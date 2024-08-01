let table = new DataTable('#myTable');
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