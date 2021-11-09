# Encriptador-y-Desencriptador-ID
Encriptador y Desencriptador ID - VB/HTML/JS/PHP

1) El proceso de reconocimiento de ID del etoken comienza en un archivo .EXE el cual lee el id del token conectado a la PC.

2) Si el token es reconocido, abre el explorador (por defecto de la PC) con una URL por la cual se le pasa como parametro el ID encriptado.

3) Este ID encriptado es procesado por el archivo codigo.js el cual hace una una solicitud AJAX a la API (script.php).

4) script.php se encarga de desencriptar para devolver el ID original del token, si este es encontrado en la BD (base de datos) en formato JSON.

5) El ID original es mostrado o no segun la respuesta de la consulta a la BD.
