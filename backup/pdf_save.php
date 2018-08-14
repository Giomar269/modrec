<?php
    // $servername = "localhost";
    // $database = "upgrade_librorecla";
    // $username = "upgrade_librorec";
    // $password = "librorec";

    $servername = "localhost";
    $database = "libro_reclamaciones";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn)
    {
          die("Connection failed: " . mysqli_connect_error());
    }

    echo '<div class="p-3 mb-2 bg-warning text-dark center">Coneccion exitosa</div>';

    $sql = mysqli_prepare("INSERT INTO reclamos(tipo_documento, documento, nombres_cliente, apellidos_cliente, sexo_cliente, telefono_cliente, email_cliente, apoderado_cliente, departamento_cliente, provincia_cliente, distrito_cliente, direccion_cliente, referencia_cliente, codigo_compra, fecha_compra, cod_producto_compra, descripcion_producto, tipo_reclamacion, detalle_desperfecto, pedido_desperfecto, monto_reclamado) VALUES ('$tipo_doc', '$documento', '$nombre', '$apellidos', '$sexo', '$telefono', '$email', '$apoderado', '$departamento', '$provincia', '$distrito', '$direccion', '$referencia', '$cod_compra', '$fecha_compra', '$cod_producto', '$des_producto', '$type_reclamo', '$detalle_desperfecto', '$pedido_reclamo', '$monto_recl');");

    if (mysqli_query($conn, $sql))
    {
          echo '<div class="p-3 mb-2 bg-warning text-dark">Nuevo registro ingresado</div>';
    }
    else
    {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "SELECT max(id) as id FROM reclamos;";

    if ($query = mysqli_query($conn, $sql))
    {
        echo '<div class="p-3 mb-2 bg-warning text-dark">Nuevo registro ingresado</div>';

        $row = mysqli_fetch_array($query);
        if($row)
        {
            $max = $row['id'];
            $max = str_pad($max, 6, "0", STR_PAD_LEFT);
            $cod_reclamo = 'RUP - ' . $max;
        }
    }
    else
    {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
