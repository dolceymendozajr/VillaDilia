<?php
  $destino="dolceymendozajr@gmail.com";
  $nombre=$_POST["nombre"];
  $asunto="Reserva - ".$nombre;
  $mail=$_POST["mail"];
  $telefono=$_POST["telefono"];
  if (isset($_POST["cper"])) {
    $cantidad=$_POST["cper"];
  }
  if (isset($_POST["desc"])) {
    $descrip=$_POST["desc"];
  }
  $chkin=$_POST["chkin"];
  $chkout=$_POST["chkout"];

  if (isset($cantidad,$descrip)) {
    $contenido="----RESERVA DE SALON REAL----\n\n"."\nNombre de persona encargada: ".$nombre
    ."\nMail de contacto: ".$mail."\nTelefono: ".$telefono
    ."\nCantidad de personas en evento: ".$cantidad."\n Descripción del evento: ".$descrip
    ."\nCheck-in: ".$chkin."\nCheck-out: ".$chkout;
  }else {
    $contenido=$contenido="----RESERVA DE HABITACIÓN----"
    ."\nNombre del cliente: ".$nombre
    ."\nMail de contacto: ".$mail."\nTelefono: ".$telefono
    ."\nCheck-in: ".$chkin."\nCheck-out: ".$chkout;
  }
echo $contenido ;

  // mail($destino,$asunto,$contenido);
  // header("Location:reservas.html")


 ?>
