 <!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PIEDRA PAPEL O TIJERA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
 </head>
 <body>
    <div> 
    piedra papel o tijera: 
    <form action="" method="get">
        <select name="Eleccion">
            <option value="Piedra">Piedra</option>
            <option value="Papel">Papel</option>
            <option value="Tijera">Tijera</option>
        </select>
        <button type="submit">!SUERTE¡</button>
    </form>
    </div>
<br>

    <?php
    //El jugador selecciona la opcion que desea de una lista
    $ElegidoUsuario = $_GET["Eleccion"];
    //El ordenador elije un numero al azar para despues cambiarlo por piedra papel o tijera
    $ElegidoOrdenador=rand(1,3);
    if ($ElegidoOrdenador== 1){
        $ElegidoOrdenador="Tijera";
    }elseif ($ElegidoOrdenador== 2){
        $ElegidoOrdenador="Papel";
    }elseif ($ElegidoOrdenador== 3){
        $ElegidoOrdenador="Piedra";
    }
    echo "<strong>El ordenador</strong> ha elegido <u>$ElegidoOrdenador</u> y <strong>el jugador</strong> a elejido <u>$ElegidoUsuario</u>.<br><br>";

    if ($ElegidoOrdenador == "Tijera" && $ElegidoUsuario =="Papel" 
    || $ElegidoOrdenador == "Papel" && $ElegidoUsuario == "Piedra" 
    || $ElegidoOrdenador == "Piedra" && $ElegidoUsuario == "Tijera"){
        echo "$ElegidoOrdenador gana a $ElegidoUsuario : <u><strong>Gana la maquina</strong></u>";
    }elseif ($ElegidoUsuario == "Tijera" && $ElegidoOrdenador=="Papel" 
    || $ElegidoUsuario == "Papel" && $ElegidoOrdenador == "Piedra" 
    || $ElegidoUsuario == "Piedra" && $ElegidoOrdenador == "Tijera"){
        echo "$ElegidoUsuario gana a $ElegidoOrdenador : <u><strong>Gana el humano</strong></u>";
    }else{ 
        echo "$ElegidoOrdenador es igual a $ElegidoUsuario : <u><strong>Es un empate</strong></u>";
    }
     
    ?>
 </body>
 </html>