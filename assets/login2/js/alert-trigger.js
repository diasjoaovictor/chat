//O Sweet Alert causa problemas com a Content Security Policy ao injetar estilos e scripts inline.
//Por isso é utilizado o sweetalert2 com a folha de estilos separada.
var elementoSweetAlert = document.getElementById('sso-sweet-alert');
if (elementoSweetAlert !== null && elementoSweetAlert != undefined) {
    Swal.fire({
        html: elementoSweetAlert.innerHTML,
        showConfirmButton: elementoSweetAlert.dataset.showConfirmButton,
        confirmButtonColor: elementoSweetAlert.dataset.confirmButtonColor
    });
}