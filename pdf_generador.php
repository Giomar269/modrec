<?php
    if(isset($_POST['submit']))
    {
        function died($error) {

            echo "Lo sentimos, hay un error en sus datos y el formulario no puede ser enviado. ";
            echo "Detalle de los errores.<br/><br/>";
            echo $error."<br/><br/>";
            echo "Porfavor corrije los errores e inténtelo de nuevo.<br/><br/>";
            die();
        }

        if(!isset($_POST['tipo_doc']) ||
            !isset($_POST['documento']) ||
            !isset($_POST['nombre']) ||
            !isset($_POST['apellidos']) ||
            !isset($_POST['sexo']) ||
            !isset($_POST['telefono']) ||
            !isset($_POST['email'])) {

            died('Lo sentimos pero parece haber un problema con los datos enviados.');
        }

        // Identificación del Consumidor Reclamante
        $tipo_doc            = $_POST['tipo_doc'];
        $documento           = $_POST['documento'];
        $nombre              = $_POST['nombre'];
        $apellidos           = $_POST['apellidos'];
        $sexo                = $_POST['sexo'];
        $telefono            = $_POST['telefono'];
        $email               = $_POST['email'];
        $apoderado           = $_POST['apoderado'];

        // Datos de su Domicilio
        $departamento        = $_POST['departamento'];
        $provincia           = $_POST['provincia'];
        $distrito            = $_POST['distrito'];
        $direccion           = $_POST['direccion'];
        $referencia          = wordwrap($_POST['referencia'], 38, "<br>", FALSE);

        // Identificación del Bien Adquirido
        $cod_compra          = $_POST['cod_compra'];
        $fecha_compra        = $_POST['fecha_compra'];
        $cod_producto        = $_POST['cod_producto'];
        $des_producto        = wordwrap($_POST['des_producto'], 90, "<br>", TRUE);

        // Detalle de la reclamación y pedido del consumidor
        $type_reclamo        = $_POST['type_reclamo'];
        $detalle_desperfecto = wordwrap($_POST['detalle_desperfecto'], 90, "<br>", TRUE);
        $pedido_reclamo      = wordwrap($_POST['pedido_reclamo'], 38, "<br>", TRUE);
        $monto_recl          = $_POST['monto_recl'];


        $error_message = "Error";

        include 'pdf_save.php';

        include 'pdf_formato.php';
    }
?>
