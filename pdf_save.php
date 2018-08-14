<?php
    // $servername = "localhost";
    // $database = "upgrade_librorecla";
    // $username = "upgrade_librorec";
    // $password = "librorec";


    // $tipo_doc = 'DNI';
    // $documento = '47548282';
    // $nombre = 'JOHn';
    // $apellidos = 'Mestas';
    // $sexo = 'F';
    // $telefono = '475896';
    // $email = 'dfjasdfjlas@gmail.com';
    // $apoderado = 'juanito perez';
    // $departamento = 'aqp';
    // $provincia = 'aqp';
    // $distrito = 'aqp';
    // $direccion = 'characato';
    // $referencia = 'a una cuadra del cruze';
    // $cod_compra = '04000';
    // $fecha_compra = '2018-04-08';
    // $cod_producto = '0400';
    // $des_producto = 'laptop';
    // $type_reclamo = 'calienta';
    // $detalle_desperfecto = 'cambio';
    // $pedido_reclamo = 'camvio';
    // $monto_recl = 2000.01;


    function conectarDb()
    {
        $servername = "localhost";
        $database = "libro_reclamaciones";
        $username = "root";
        $password = "";

        $mysqli = new mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_errno)
        {
            printf("Falló la conexión: %s\n", $mysqli->connect_error);
            exit();
        }

        return $mysqli;
    }

    function insertarRegistro($tipo_doc, $documento, $nombre, $apellidos, $sexo, $telefono, $email, $apoderado, $departamento, $provincia, $distrito, $direccion, $referencia, $cod_compra, $fecha_compra, $cod_producto, $des_producto, $type_reclamo, $detalle_desperfecto, $pedido_reclamo, $monto_recl)
    {

        $mysqli = conectarDb();

        $stmt = $mysqli->prepare("INSERT INTO reclamos(tipo_documento, documento, nombres_cliente, apellidos_cliente, sexo_cliente, telefono_cliente, email_cliente, apoderado_cliente, departamento_cliente, provincia_cliente, distrito_cliente, direccion_cliente, referencia_cliente, codigo_compra, fecha_compra, cod_producto_compra, descripcion_producto, tipo_reclamacion, detalle_desperfecto, pedido_desperfecto, monto_reclamado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

        $stmt->bind_param('ssssssssssssssssssssd', $tipo_doc, $documento, $nombre, $apellidos, $sexo, $telefono, $email, $apoderado, $departamento, $provincia, $distrito, $direccion, $referencia, $cod_compra, $fecha_compra, $cod_producto, $des_producto, $type_reclamo, $detalle_desperfecto, $pedido_reclamo, $monto_recl);

        $stmt->execute();
        $stmt->close();
    }



    function getUR()
    {
        $mysqli = conectarDb();

        if ($result = $mysqli->query("SELECT max(id) as id FROM reclamos;"))
        {
            $row = mysqli_fetch_array($result);

            if($row)
            {
                $max = $row['id'];
                $max = str_pad($max, 6, "0", STR_PAD_LEFT);
                $cod_reclamo = 'RUP - ' . $max;
                return $cod_reclamo;
            }
        }

        $mysqli->close();
    }

    insertarRegistro($tipo_doc, $documento, $nombre, $apellidos, $sexo, $telefono, $email, $apoderado, $departamento, $provincia, $distrito, $direccion, $referencia, $cod_compra, $fecha_compra, $cod_producto, $des_producto, $type_reclamo, $detalle_desperfecto, $pedido_reclamo, $monto_recl);

?>


