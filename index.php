<?php
    error_reporting(0);

    require __DIR__.'/vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    function sendEmail()
    {
        require_once 'pdf_mailer.php';

        try
        {
            enviar_correo('john.mestas.t@gmail.com', 'John', 'File');
        }
        catch (Exception $e) {
            echo 'Mailer Error';
        }
    }

    function generarPdf()
    {
        ob_start();
        require_once 'pdf_generador.php';
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
        $html2pdf->writeHTML($html);
        $html2pdf->output('Reclamo.pdf');
    }

    if(isset($_POST['submit']))
    {
        generarPdf();
        sendEmail();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>LIBRO DE RECLAMACIONES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form action="" method="post" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    LIBRO DE RECLAMACIONES
                </span>

                <span class="contact100-form-subtitle">
                    Identificación del Consumidor Reclamante
                </span>

                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">TIPO DE DOCUMENTO *</span>
                    <div>
                        <select class="js-select2" name="tipo_doc">
                            <option value="DNI">DNI</option>
                            <option value="RUC">RUC</option>
                            <option value="SE">SE</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingrese su documento">
                    <span class="label-input100">DOCUMENTO *</span>
                    <input class="input100" type="number" name="documento" placeholder="Ingresa documento">
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingrese su nombre">
                    <span class="label-input100">NOMBRES *</span>
                    <input class="input100" type="text" name="nombre" placeholder="Ingresa tu nombre">
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingrese sus apellidos">
                    <span class="label-input100">APELLIDOS *</span>
                    <input class="input100" type="text" name="apellidos" placeholder="Ingresa tus apellidos">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <span class="label-input100">SEXO *</span>
                    <div>
                        <select class="js-select2" name="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Telefono / Celular</span>
                    <input class="input100" type="number" name="telefono" placeholder="Ingrese su numero">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Ingrese su correo electronico">
                    <span class="label-input100">Email *</span>
                    <input class="input100" type="text" name="email" placeholder="Ingrese su correo">
                </div>

                <div class="wrap-input100 bg1">
                    <span class="label-input100">APODERADO (Si es que fuera menor de edad)</span>
                    <input class="input100" type="text" name="apoderado" placeholder="Ingresa tus apellidos">
                </div>

                <span class="contact100-form-title">
                </span>

                <span class="contact100-form-subtitle">
                    Datos de su Domicilio
                </span>

                <div class="wrap-input100 bg1 validate-input rs1-wrap-input100" data-validate="Por favor el departamento">
                    <span class="label-input100">Departamento</span>
                    <input class="input100" type="text" name="departamento" placeholder="Ingrese el departamento">
                </div>

                <div class="wrap-input100 bg1 validate-input rs1-wrap-input100" data-validate="Por favor ingrese la privincia">
                    <span class="label-input100">Provincia</span>
                    <input class="input100" type="text" name="provincia" placeholder="Ingrese la provincia">
                </div>

                <div class="wrap-input100 bg1 validate-input rs1-wrap-input100" data-validate="Por favor ingrese el distrito">
                    <span class="label-input100">Distrito</span>
                    <input class="input100" type="text" name="distrito" placeholder="Ingrese el distrito">
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingrese su reccion">
                    <span class="label-input100">DIRECCION *</span>
                    <input class="input100" type="text" name="direccion" placeholder="Ingresa su direccion">
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingrese alguna referencia">
                    <span class="label-input100">REFERENCIA *</span>
                    <input class="input100" type="text" name="referencia" placeholder="Ingresa algura referencia">
                </div>

                <span class="contact100-form-title">
                </span>

                <span class="contact100-form-subtitle">
                    Identificación del Bien Adquirido
                </span>

                <div class="wrap-input100 validate-input bg1" data-validate="Este campo es obligatorio">
                    <span class="label-input100">CODIGO DE COMPRA *</span>
                    <input class="input100" type="text" name="cod_compra" placeholder="Ingrese el codigo de la compra">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100" data-validate = "Ingrese una fecha valida">
                    <span class="label-input100">Fecha de Compra *</span>
                    <input class="input100" type="date" name="fecha_compra">
                </div>

                <div class="wrap-input100 bg1 validate-input rs1-wrap-input100" data-validate="Este campo es obligatorio">
                    <span class="label-input100">CODIGO DEL PRODUCTO</span>
                    <input class="input100" type="text" name="cod_producto" placeholder="Ingrese el codigo del producto">
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Este campo es obligatorio">
                    <span class="label-input100">Descripcion del producto</span>
                    <textarea class="input100" name="des_producto" placeholder="Ingrese los detalles aqui"></textarea>
                </div>

                <span class="contact100-form-subtitle">
                </span>

                <span class="contact100-form-subtitle">
                    Detalle de la reclamación y pedido del consumidor
                </span>

                <div class="wrap-contact100-form-radio">
                    <span class="label-input100">Tipo</span>

                    <div class="contact100-form-radio m-t-15">
                        <input class="input-radio100" id="radio1" type="radio" name="type_reclamo" value="reclamo" checked="checked">
                        <label class="label-radio100" for="radio1">
                            RECLAMO: Disconformidad relacionada a los productos o servicios.
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio2" type="radio" name="type_reclamo" value="queja">
                        <label class="label-radio100" for="radio2">
                            QUEJA: Disconformidad no relacionada a los productos o servicios o malestar o descontento respecto a la atención al público. La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.
                        </label>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Este campo es obligatorio">
                    <span class="label-input100">Detalle del desperfecto</span>
                    <textarea class="input100" name="detalle_desperfecto" placeholder="Ingrese los detalles aqui"></textarea>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Este campo es obligatorio">
                    <span class="label-input100">Pedido</span>
                    <textarea class="input100" name="pedido_reclamo" placeholder="Espesifique que podemos hacer para remediarlo."></textarea>
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Este campo es obligatorio">
                    <span class="label-input100">MONTO RECLAMADO *</span>
                    <input class="input100" type="number" name="monto_recl" placeholder="Ingrese el monto reclamado">
                </div>

                <div class="wrap-input100">
                    <input type="checkbox" name="cb-autos" value="imprimir"> Aviso Legal: Doy conformidad a todos los datos consignados en mi reclamo/queja. El hacer click en el boton "Registrar", sustituye a mi firma manuscrita, con igual validez, conforme al articulo 141 y 141-A del Codigo Civil.
                </div>

                <span class="contact100-form-title">
                </span>

                <div class="container-contact100-form-btn">
                    <button name="submit" class="contact100-form-btn">
                        <span>
                            ENVIAR
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>


    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });

            $(".tipo_reclamo").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Reclamo") {
                        $('.js-show-service').slideUp();
                    } else if ($(this).val() == "Queja"){
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>

    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>
</html>
