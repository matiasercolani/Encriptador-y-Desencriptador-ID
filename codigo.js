let parametroUrl = window.location.search.substring(1);

console.log(parametroUrl);

let urlPhp = "https://localhost/sitepro/script.php?"

let urlCompleta = urlPhp + parametroUrl;

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