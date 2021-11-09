<?php


if(isset($_GET['id'])){

    $id = $_GET['id'];

    $numeroDeSerie = Desencriptar($id);

    $ObjetoNumSerie = [
        'Respuesta' => 'ID Desencriptado - Su numero de serie es: ',
        'ID' => $numeroDeSerie,
    ];

    echo json_encode($ObjetoNumSerie);

    
} else{

    $ObjetoNumSerie = [
        'Respuesta' => 'No se pudo desencriptar',
        'ID' => 'eToken no compatible',
    ];

    echo 'Error - ID no recibido.';

    echo json_encode($ObjetoNumSerie);

}




function Desencriptar($id){

    for ( $i = 0; $i < strlen($id) ; $i++ ) {

        if($id[$i] == 'Y' || $id[$i] == 'T' || $id[$i] == 'Q' || $id[$i] == 'V' || $id[$i] == 'X' || $id[$i] == 'U' || $id[$i] == '9'){
            $id[$i] = ',';
        }
        $cadenaDinamica = $id;
    }

    $cadenaDinamica = trim($cadenaDinamica, ',');       // Elimina la ultima coma

    $cadenaDinamica = explode(",", $cadenaDinamica);        // Se crea un array mediante la separacion por comas

    $idDesencriptado = reemplazoId($cadenaDinamica);

    return  $idDesencriptado;

}





// Esta funcion reemplaza uno por uno los caracteres y devuelve el ID del token original (descifrado).

function reemplazoId($cadenaDinamica){

    $idDesencriptado = "";

    for ( $i = 0; $i < sizeof($cadenaDinamica) ; $i++ ) {
        
        switch ($cadenaDinamica[$i]) {

            case "K":
                $cadenaDinamica[$i] = "1";
                break;
            case "R":
                $cadenaDinamica[$i] = "2";
                break;
            case "Z":
                $cadenaDinamica[$i] = "3";
                break;
            case "H":
                $cadenaDinamica[$i] = "4";
                break;
            case "J":
                $cadenaDinamica[$i] = "5";
                break;
            case "A":
                $cadenaDinamica[$i] = "6";
                break;
            case "O":
                $cadenaDinamica[$i] = "7";
                break;
            case "L":
                $cadenaDinamica[$i] = "8";
                break;
            case "C":
                $cadenaDinamica[$i] = "9";
                break;
            case "W":
                $cadenaDinamica[$i] = "0";
                break;
            case "150":
                $cadenaDinamica[$i] = "A";
                break;
            case "231":
                $cadenaDinamica[$i] = "B";
                break;
            case "365":
                $cadenaDinamica[$i] = "C";
                break;
            case "420":
                $cadenaDinamica[$i] = "D";
                break;
            case "087":
                $cadenaDinamica[$i] = "E";
                break;
            case "056":
                $cadenaDinamica[$i] = "F";
                break;
            case "255":
                $cadenaDinamica[$i] = "G";
                break;
            case "658":
                $cadenaDinamica[$i] = "H";
                break;
            case "421":
                $cadenaDinamica[$i] = "I";
                break;
            case "241":
                $cadenaDinamica[$i] = "J";
                break;
            case "322":
                $cadenaDinamica[$i] = "K";
                break;
            case "023":
                $cadenaDinamica[$i] = "L";
                break;
            case "054":
                $cadenaDinamica[$i] = "M";
                break;
            case "362":
                $cadenaDinamica[$i] = "N";
                break;
            case "522":
                $cadenaDinamica[$i] = "O";
                break;
            case "430":
                $cadenaDinamica[$i] = "P";
                break;
            case "306":
                $cadenaDinamica[$i] = "Q";
                break;
            case "252":
                $cadenaDinamica[$i] = "R";
                break;
            case "168":
                $cadenaDinamica[$i] = "S";
                break;
            case "145":
                $cadenaDinamica[$i] = "T";
                break;
            case "312":
                $cadenaDinamica[$i] = "U";
                break;
            case "602":
                $cadenaDinamica[$i] = "V";
                break;
            case "604":
                $cadenaDinamica[$i] = "W";
                break;
            case "187":
                $cadenaDinamica[$i] = "X";
                break;
            case "273":
                $cadenaDinamica[$i] = "Y";
                break;
            case "587":
                $cadenaDinamica[$i] = "Z";
                break;
        }

        $idDesencriptado = $idDesencriptado.$cadenaDinamica[$i];

    }

    return $idDesencriptado;

}


?>