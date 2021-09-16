var sistema = sessionStorage.getItem("SSO_SISTEMA");
if (sistema === "CVF") {
    document.getElementById("estilo_ctn").remove();
    document.getElementById("tema_ctn").remove();
} else {
    document.getElementById("estilo_cvf").remove();
    document.getElementById("tema_cvf").remove();
}
