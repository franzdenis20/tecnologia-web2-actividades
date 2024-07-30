<?php
if (isset($_POST['submit'])) {
    $uploadDir = 'uploads/';
    $file = $_FILES['file'];
    if (file_exists($file)) {
        $size =filesize(($file));
        $creado = filectime($file);
    
        $creadoFecha = date("d/m/Y H:i:s");
        $modificado = filemtime($file);
        $modificadoFecha = date("d/m/Y H:i:s",$modificado);
    
        $kl = $size /1024;
        $mg = $kl / 1024;
        echo("Size = $size => $mg <br>
          Creado = $creado <br>
          Creado Fecha = $creadoFecha <br> 
          Modificado = $modificado <br>
          Modificado Fecha = $modificadoFecha <br>");
    }else{
        echo "Archivo no exixte";
    }
}
?>
