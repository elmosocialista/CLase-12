<?php
     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
     $telefono=$_POST['telefono'];
     $url=$_POST['url'];
     $subject='Formulario de contacto';
     $para='bobadilla.jessi@gmail.com';
     echo"<script language='javascript'>
    alert('hola');
    </script>";
         $header = 'From: ' .$nombre;
     $msjCorreo = "Nombre: $nombre\n Apellido: $apellido\n Edad: $edad\n Telefono:\n $telefono URL:\n $url";
     echo "<script language='javascript'>
      alert('hola2');
       </script>"; 
    if ($_POST['submit']) 
     {
        echo "<script language='javascript'>
         alert('hola3');
 </script>";
     if (mail($para, $subject, $msjCorreo, $header)) 
     {
         echo "<script language='javascript'>
         alert('Mensaje enviado, muchas gracias.');
         </script>";
         } 
        else 
        {
         echo "<script language='javascript'>
         alert('fallado');
         </script>";
        }
    } 
?>
