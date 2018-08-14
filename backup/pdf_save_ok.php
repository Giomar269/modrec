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



    $servername = "localhost";
    $database = "libro_reclamaciones";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = mysqli_prepare($conn, "INSERT INTO reclamos(tipo_documento, documento, nombres_cliente, apellidos_cliente, sexo_cliente, telefono_cliente, email_cliente, apoderado_cliente, departamento_cliente, provincia_cliente, distrito_cliente, direccion_cliente, referencia_cliente, codigo_compra, fecha_compra, cod_producto_compra, descripcion_producto, tipo_reclamacion, detalle_desperfecto, pedido_desperfecto, monto_reclamado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

    mysqli_stmt_bind_param($sql, 'ssssssssssssssssssssd', $tipo_doc, $documento, $nombre, $apellidos, $sexo, $telefono, $email, $apoderado, $departamento, $provincia, $distrito, $direccion, $referencia, $cod_compra, $fecha_compra, $cod_producto, $des_producto, $type_reclamo, $detalle_desperfecto, $pedido_reclamo, $monto_recl);

    if (mysqli_stmt_execute($sql)) {
          echo "New record created successfully";
    } else {
          printf("Error: %s.\n", mysqli_stmt_error($sql));
    }

    mysqli_stmt_close($sql);

    $sql = "SELECT max(id) as id FROM reclamos;";

    if ($query = mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
        $row = mysqli_fetch_array($query);
        if($row)
        {
            $max = $row['id'];
            $max = str_pad($max, 6, "0", STR_PAD_LEFT);
            $cod_reclamo = 'RUP - ' . $max;
            echo $cod_reclamo;
        }

    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>


