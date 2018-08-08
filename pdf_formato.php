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
            padding: 1px;
            margin: 1px;
        }

        .center {
            text-align: center;
            vertical-align: middle;
            margin: 2px;
            padding: 2px;
        }

        .oculto {
            display: none;
        }

        body {
            font-family: Arial;
            width: 100%
        }

        .hideme {
            height: 1px; border: none
        }
        .noborder{border: none}
        .offscreen {height: 0px; width: 0px; position: absolute; overflow: hidden; top: -20px; }
    </style>
</head>

<body>
    <nobreak>
    <table class="tg">
        <tr class="hideme">
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
            <th class="center noborder" width="10%"><span class="offscreen">upgrade</span></th>
        </tr>

        <tr>
            <td class="tg-us36 titulo center" colspan="4">
                <h5>LIBRO DE RECLAMACIONES</h5>
            </td>

            <td class="tg-us36 center" colspan="6" rowspan="2">
                <h3>HOJA DE RECLAMACION</h3>
                Reclamacion: xxx
            </td>
        </tr>
<?php
            $hoy = date("Y-m-d");
            $ahora= time();
            $anno = date("Y",$ahora);
            $mes = date("m",$ahora);
            $dia = date("d",$ahora);
?>
        <tr>
            <td class="tg-us36">
                <h5>FECHA:</h5>
            </td>

            <td class="tg-us36">
<?php
                    print $anno;
?>
            </td>

            <td class="tg-us36">
<?php
                    print $mes;
?>
            </td>

            <td class="tg-us36">
<?php
                    print $dia;
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 center" colspan="10">
                <br>
                <h4 class="center">GRUPO UPGRADE S.A.C. RUC 20454043660</h4>
                <p>GRUPO UPGRADE Dir: Urb. Magisterial II B-4 Umacollo, Yanahuara - Arequipa</p>
                <br>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="10">
                <h5>1. IDENTIFICACION DEL CONDUMIDOR RECLAMANTE</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>NOMBRE:
<?php
                    print "$nombre $apellidos";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>DOMICILIO:
<?php
                    print "$departamento/$provincia/$distrito - $direccion";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>DNI/CE:
<?php
                    print "$documento";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>TELEFONO/EMAIL:
<?php
                    print "$telefono / $email";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>APODERADO:
<?php
                    print "$apoderado";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="10">
                <h5>2. IDENTIFICACION DEL BIEN CONTRATADO</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="1"><h5>PRODUCTO:</h5></td>
            <td class="tg-us36 center" colspan="1"><h5>X</h5></td>
            <td class="tg-us36" colspan="3"><h5>MONTO RECLAMADO:</h5></td>
            <td class="tg-us36" colspan="6">
                <h5>
<?php
                print "S/. $monto_recl.00";
?>
                </h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>DESCRIPCION:</h5>
<?php
                    print "$des_producto";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="10">
                <h5>3. DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36">
                <h5>RECLAMO:</h5>
            </td>

            <td class="tg-us36">
                <h5 class="center">
<?php
                    if (strcmp($type_reclamo, "reclamo") == 0) {
                      print "  X  ";
                    }
?>
                </h5>
            </td>

            <td class="tg-us36" colspan="8" rowspan="2">
                <h5>PEDIDO:</h5>
<?php
                    print "$pedido_reclamo";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36">
                <h5>QUEJA:</h5>
            </td>

            <td class="tg-us36">
<?php
                if (strcmp($type_reclamo, "queja") == 0) {
                  print "[  X  ]";
                }
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>DETALLE</h5>
<?php
                    print "$detalle_desperfecto";
?>
            </td>
        </tr>

        <tr>
            <td class="tg-us36 titulo" colspan="10">
                <h5>4. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="7">
                <h5>FECHA DE COMUNICACION DE LA RESPUESTA:</h5>
            </td>
            <td class="tg-us36" colspan="3"></td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>OBSERVACION:</h5>
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>RECLAMO:</h5>
                Disconformidad relacionada a los productos o servicios.
            </td>
        </tr>

        <tr>
            <td class="tg-us36" colspan="10">
                <h5>QUEJA:</h5>
                Disconformidad no relacionada a los productos o servicios; o malestar o descontento respecto a la atencion al publico.
            </td>
        </tr>

    </table>
    </nobreak>
</body>
</html>
