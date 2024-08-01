let inpIdentificacion = document.getElementById("identificacion");
//Procesos
const validNumber = (e) => {
    var regex = /^[0-9]*$/g;
    var target = e.target;
    if (!regex.test(e.data)) {
        target.value = target.value.substring(0, target.value.length - 1);
    };
};
//Eventos
inpIdentificacion.addEventListener("input", validNumber);