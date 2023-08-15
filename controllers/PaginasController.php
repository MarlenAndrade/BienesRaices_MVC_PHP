<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;
use Model\Contacto;

class PaginasController {
    public static function index(Router $router) {
        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index', [
            'inicio' => $inicio,
            'propiedades' => $propiedades
        ]);
    }

    public static function nosotros( Router $router ) {
        $router->render('paginas/nosotros', [
        ]);
    }

    public static function propiedades( Router $router ) {
        $propiedades = Propiedad::all();

        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router) {
        $id = validarORedireccionar('/propiedades');

        $propiedad = Propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }

    public static function blog( Router $router ) {
        $router->render('paginas/blog');
    }

    public static function entrada1( Router $router ) {
        $router->render('paginas/entrada1');
    }

    public static function entrada2( Router $router ) {
        $router->render('paginas/entrada2');
    }

    public static function entrada3( Router $router ) {
        $router->render('paginas/entrada3');
    }

    public static function entrada4( Router $router ) {
        $router->render('paginas/entrada4');
    }

    public static function error404( Router $router ) {
        $router->render('paginas/error404');
    }


    public static function contacto( Router $router ) {
        $mensaje = null;
        $contacto = new Contacto;

        $errores = Contacto::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contacto = new Contacto($_POST['contacto']);
            $errores = $contacto->validar();

            // - - - - Si no hay errores - - - - //
            if(empty($errores)){
                $respuestas = $_POST['contacto'];
            
                // - - - Crear una instancia de PHPMailer - - - //
                $mail = new PHPMailer();
                
                // - - - Configurar un SMTP - - - //
                $mail->isSMTP();
                $mail->Host = $_ENV['EMAIL_HOST'];
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV['EMAIL_USER'];
                $mail->Password = $_ENV['EMAIL_PASS'];
                $mail->SMTPSecure = 'tls';
                $mail->Port = $_ENV['EMAIL_PORT'];
                
                // - - - Configurar el contenido del mail - - - //
                $mail->setFrom('admin@bienesraices.com');
                $mail->addAddress('02marlen95@gmail.com', 'BienesRaicesMarlen.com');
                $mail->Subject = 'Tienes un Nuevo Mensaje';

                // - - - Habilitar HTML - - - //
                $mail->isHTML(TRUE);
                $mail->CharSet = 'UTF-8';

                // - - - Definir el contenido - - - //
                $contenido = '<html>';
                $contenido .= '<p>Tienes un nuevo mensaje</p>';
                $contenido .= '<p>Nombre: ' . $respuestas['nombre'] .'</p>';

                if($respuestas['contacto'] === 'telefono'){
                    $contenido .= '<p>Eligió ser contactado por TELÉFONO</p>';
                    $contenido .= '<p>Teléfono: ' . $respuestas['telefono'] .'</p>';
                    $contenido .= '<p>Fecha de Contacto: ' . $respuestas['fecha'] .'</p>';
                    $contenido .= '<p>Hora de Contacto: ' . $respuestas['hora'] .'</p>';
                } else {
                    $contenido .= '<p>Eligió ser contactado por E-MAIL</p>';
                    $contenido .= '<p>E-mail: ' . $respuestas['email'] .'</p>';
                }

                $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] .'</p>';
                $contenido .= '<p>Vende o Compra: ' . $respuestas['tipo'] .'</p>';
                $contenido .= '<p>Precio o Presupuesto: $' . $respuestas['precio'] .'</p>';
                $contenido .= '<p>Forma de Contacto: ' . $respuestas['contacto'] .'</p>';
                $contenido .= '</html>';

                $mail->Body = $contenido;
                $mail->AltBody = 'Esto es texto alternativo sin HTML';

                // - - - Enviar email - - - //
                if($mail->send()){
                    $mensaje = "Mensaje enviado correctamente";
                } else {
                    $mensaje = "¡El mensaje no se pudo enviar!";
                }
            }
        }
        
        $router->render('paginas/contacto', [
            'contacto' => $contacto,
            'mensaje' => $mensaje,
            'errores' => $errores
        ]);
    }
}