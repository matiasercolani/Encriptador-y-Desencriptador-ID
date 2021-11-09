let parametroUrl = window.location.search.substring(1);

const urlConst = "https://localhost/encriptador-sitepro/Encriptador-y-Desencriptador-ID/";                  // En esta constante se coloca la URL(base) a la cual se debe redirigir

const urlPhp = "script.php?";

let urlCompleta = urlConst + urlPhp + parametroUrl;

console.log(urlCompleta);


$.ajax({
    url: urlCompleta,
    async: "true",
    dataType: "json",
    type: "POST",
    data: {},
}).done(function (result) {
    document.getElementById('subtituloDinamico').innerHTML = result.Respuesta;
    document.getElementById('Data').innerHTML = result.ID;
}).fail(function (error) {
    console.log(error);
});