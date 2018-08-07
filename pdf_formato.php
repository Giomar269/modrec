<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MODULO RECLAMOS</title>
    <style type="text/css">
        .tg {
            border-collapse:collapse;
            border-spacing:0;
            border-color:#ccc;
        }

        .tg td{font-family:Arial, sans-serif;
            font-size:14px;
            padding:10px 5px;
            border-style:solid;
            border-width:1px;
            overflow:hidden;
            word-break:normal;
            border-color:#ccc;
            color:#333;
        }

        .tg th{font-family:Arial, sans-serif;
            font-size:14px;
            font-weight:normal;
            padding:10px 5px;
            border-style:solid;
            border-width:1px;
            overflow:hidden;
            word-break:normal;
            border-color:#ccc;
            color:#333;
            background-color:#f0f0f0;
        }

        .titulo {
            background-color:#f0f0f0;
        }

        .tg .tg-us36 {
            border-color:inherit;
            vertical-align:top
        }

        .tg .tg-yw4l{vertical-align:top}

        h1, h2, h3, h4, h5 {
            padding: 0px;
            margin: 0px;
        }

        .center {
            text-align: center;
            margin: 2px;
            padding: 2px;
        }

        body {
            font-family: Arial;
        }
    </style>
</head>

<body>
    <nobreak>
    <table class="tg">
        <tr>
            <th class="tg-us36 center" colspan="2"><h5>LIBRO DE RECLAMACIONES</h5></th>
            <th class="tg-us36 center" colspan="11" rowspan="2">
                <h5>HOJA DE RECLAMACION</h5>
                <p>Reclamacion: xxx</p>
            </th>
        </tr>
<?php
            $hoy = date("Y-m-d");
?>
        <tr>
            <td class="tg-us36">
                <h5>FECHA:</h5>
            </td>

            <td class="center">
<?php
                    print $hoy
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 center" colspan="13">
                <h4>GRUPO UPGRADE S.A.C. RUC 20454043660</h4>
                <p>GRUPO UPGRADE Dir: Urb. Magisterial II B-4 Umacollo, <br> Yanahuara - Arequipa</p>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="13">
                <h5>1. IDENTIFICACION DEL CONDUMIDOR RECLAMANTE</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>NOMBRE:
<?php
                    print "$nombre $apellidos";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>DOMICILIO:
<?php
                    print "$departamento/$provincia/$distrito - $direccion";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>DNI/CE:
<?php
                    print "$documento";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>TELEFONO/EMAIL:
<?php
                    print "$telefono / $email";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>PADRE O MADRE:</h5>
<?php
                    print "$apoderado";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="13">
                <h5>2. IDENTIFICACION DEL BIEN CONTRATADO</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36"><h5>PRODUCTO: [  X  ]</h5></td>
            <td class="tg-us36" colspan="12" rowspan="2">
                <h5>DESCRIPCION:</h5>
<?php
                    print "$detalle_desperfecto";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36">
                <h5>MONTO RECLAMADO:
<?php
                print "S/. $monto_recl.00";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="13">
                <h5>3. DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR</h5>
            </td>
        </tr>
        <tr>
            <td class="tg-us36">
                <h5>RECLAMO:
<?php
                    if (strcmp($type_reclamo, "reclamo") == 0) {
                      print "[  X  ]";
                    }
?>
                </h5>
            </td>
            <td class="tg-us36" colspan="12" rowspan="2">
                <h5>PEDIDO:</h5>
<?php
                    print "$pedido_reclamo";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36">
                <h5>QUEJA:
<?php
                    if (strcmp($type_reclamo, "queja") == 0) {
                      print "[  X  ]";
                    }
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="13">
                <h5>DETALLE
<?php
                    print "$detalle_desperfecto";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-yw4l titulo" colspan="13">
                <h5>4. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-yw4l" colspan="12">
                <h5>FECHA DE COMUNICACION DE LA RESPUESTA:</h5>
            </td>
            <td class="tg-yw4l" colspan="1"></td>
        </tr>

        <tr>
            <td class="tg-yw4l" colspan="13">
                <h5>OBSERVACION:</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-yw4l" colspan="13">
                <h5>RECLAMO:</h5>
<?php
                print wordwrap("Disconformidad relacionada a los productos o servicios.", 90, "<br>", TRUE);
?>

            </td>

        </tr>

        <tr>
            <td class="tg-yw4l" colspan="13">
                <h5>QUEJA:</h5>
<?php
                print wordwrap("Disconformidad no relacionada a los productos o servicios; o malestar o descontento respecto a la atencion al publico.", 90, "<br>", TRUE);
?>
            </td>
        </tr>

    </table>
    </nobreak>
</body>
</html>
