<?php

namespace app\src;

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

class Mail
{

    public function send()
    {

        // Load Composer's autoloader
        // require 'vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;               // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'pcmba.mizu@gmail.com';                     // SMTP username
            $mail->Password   = 'somel.192699';                               // SMTP password
            $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('from@example.com', 'PCM');
            $mail->addAddress('jonathan.lemos@mizu.com.br', 'Jonathan');
            //$mail->addAddress('irineu.silva@mizu.com.br', 'Irineu');
            //$mail->addAddress('carlos.rocha@mizu.com.br', 'Carlos');
            // $mail->addAddress('luiz.pinto@mizu.com.br', 'Luiz');
            // $mail->addAddress('miria.rodrigues@mizu.com.br', 'Miria');
            // $mail->addAddress('rosinaldo.cavalcante@mizu.com.br', 'Naldo');
            // $mail->addAddress('pcm.ba@mizu.com.br', 'Equipe PCM');
            // $mail->addAddress('glenderson.silva@mizu.com.br', 'Glenderson');

            

            // Dados do integrante
            $mat = $_POST['matriculaintegrante0'];
            $nome = $_POST['nomeintegrante1'];
            $osss = $_POST['osssintegrante2'];
            $tag = $_POST['tagintegrante3'];
            $motivo = $_POST['motivointegrante4'];
            $setor = $_POST['setorintegrante5'];

            $x = '-';
            $matnok = str_replace("\n", "<br/>", $_POST['matnok']);
            if($matnok == null ){
                $x ='
                <table>            
                    <thead>
                        <tr>
                            <th>Integrante</th>
                            <th>Matrícula</th>
                            <th>O.S/S.S</th>
                            <th>Tag</th>
                            <th>Motivo</th>
                            <th>Setor</th>
                            </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>'.$nome. '</td>
                            <td>'.$mat.'</td>
                            <td>'.$osss.'</td>
                            <td>'.$tag.'</td>
                            <td>'.$motivo.'</td>
                            <td>'.$setor.'</td>
                        </tr>
                    </tbody>
                </table>';
            }

            // 


            $produto0 = "<tr>" . "<td>" . $_POST['codigo0'] . "</td>" . "<td>" . $_POST['descricao0'] . "</td>" . "<td>" . $_POST['qdte0'] . "</td>" . "<td>" . $_POST['und0'] . "</td>" . "</tr>";

            if ($produto0  == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto0 = null;
            }
            

            $produto1 = "<tr>" . "<td>" . $_POST['codigo1'] . "</td>" . "<td>" . $_POST['descricao1'] . "</td>" . "<td>" . $_POST['qdte1'] . "</td>" . "<td>" . $_POST['und1'] . "</td>" . "</tr>";
            if ($produto1  == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto1 = null;
            }
            
            $produto2 = "<tr>" .  "<td>" . $_POST['codigo3'] . "</td>" . "<td>" . $_POST['descricao3'] . "</td>" . "<td>" . $_POST['qdte3'] . "</td>" . "<td>" . $_POST['und3'] . "</td>" . "</tr>";
            if ($produto2 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto2 = null;
            }



            $produto3 = "<tr>" .  "<td>" . $_POST['codigo3'] . "</td>" . "<td>" . $_POST['descricao3'] . "</td>" . "<td>" . $_POST['qdte3'] . "</td>" . "<td>" . $_POST['und3'] . "</td>" . "</tr>";
            if ($produto3 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto3 = null;
            }

            $produto4 = "<tr>" .  "<td>" . $_POST['codigo4'] . "</td>" . "<td>" . $_POST['descricao4'] . "</td>" . "<td>" . $_POST['qdte4'] . "</td>" . "<td>" . $_POST['und4'] . "</td>" . "</tr>";
            if ($produto4 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto4 = null;
            }

            $produto5 = "<tr>" .  "<td>" . $_POST['codigo5'] . "</td>" . "<td>" . $_POST['descricao5'] . "</td>" . "<td>" . $_POST['qdte5'] . "</td>" . "<td>" . $_POST['und5'] . "</td>" . "</tr>";
            if ($produto5 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto5 = null;
            }

            $produto6 = "<tr>" .  "<td>" . $_POST['codigo6'] . "</td>" . "<td>" . $_POST['descricao6'] . "</td>" . "<td>" . $_POST['qdte6'] . "</td>" . "<td>" . $_POST['und6'] . "</td>" . "</tr>";
            if ($produto6 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto6 = null;
            }

            $produto7 = "<tr>" .  "<td>" . $_POST['codigo7'] . "</td>" . "<td>" . $_POST['descricao7'] . "</td>" . "<td>" . $_POST['qdte7'] . "</td>" . "<td>" . $_POST['und7'] . "</td>" . "</tr>";
            if ($produto7 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto7 = null;
            }

            $produto8 = "<tr>" .  "<td>" . $_POST['codigo8'] . "</td>" . "<td>" . $_POST['descricao8'] . "</td>" . "<td>" . $_POST['qdte8'] . "</td>" . "<td>" . $_POST['und8'] . "</td>" . "</tr>";
            if ($produto8 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto8 = null;
            }

            $produto9 = "<tr>" .  "<td>" . $_POST['codigo9'] . "</td>" . "<td>" . $_POST['descricao9'] . "</td>" . "<td>" . $_POST['qdte9'] . "</td>" . "<td>" . $_POST['und9'] . "</td>" . "</tr>";
            if ($produto9 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto9 = null;
            }

            $produto10 = "<tr>" .  "<td>" . $_POST['codigo10'] . "</td>" . "<td>" . $_POST['descricao10'] . "</td>" . "<td>" . $_POST['qdte10'] . "</td>" . "<td>" . $_POST['und10'] . "</td>" . "</tr>";
            if ($produto10 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto10 = null;
            }

            $produto11 = "<tr>" .  "<td>" . $_POST['codigo11'] . "</td>" . "<td>" . $_POST['descricao11'] . "</td>" . "<td>" . $_POST['qdte11'] . "</td>" . "<td>" . $_POST['und11'] . "</td>" . "</tr>";
            if ($produto11 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto11 = null;
            }

            $produto12 = "<tr>" .  "<td>" . $_POST['codigo12'] . "</td>" . "<td>" . $_POST['descricao12'] . "</td>" . "<td>" . $_POST['qdte12'] . "</td>" . "<td>" . $_POST['und12'] . "</td>" . "</tr>";
            if ($produto12 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto12 = null;
            }

            $produto13 = "<tr>" .  "<td>" . $_POST['codigo13'] . "</td>" . "<td>" . $_POST['descricao13'] . "</td>" . "<td>" . $_POST['qdte13'] . "</td>" . "<td>" . $_POST['und13'] . "</td>" . "</tr>";
            if ($produto13 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto13 = null;
            }

            $produto14 = "<tr>" .  "<td>" . $_POST['codigo14'] . "</td>" . "<td>" . $_POST['descricao14'] . "</td>" . "<td>" . $_POST['qdte14'] . "</td>" . "<td>" . $_POST['und14'] . "</td>" . "</tr>";
            if ($produto14 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto14 = null;
            }

            $produto15 = "<tr>" .  "<td>" . $_POST['codigo15'] . "</td>" . "<td>" . $_POST['descricao15'] . "</td>" . "<td>" . $_POST['qdte15'] . "</td>" . "<td>" . $_POST['und15'] . "</td>" . "</tr>";
            if ($produto15 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto15 = null;
            }

            $produto16 = "<tr>" .  "<td>" . $_POST['codigo16'] . "</td>" . "<td>" . $_POST['descricao16'] . "</td>" . "<td>" . $_POST['qdte16'] . "</td>" . "<td>" . $_POST['und16'] . "</td>" . "</tr>";
            if ($produto16 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto16 = null;
            }

            $produto17 = "<tr>" .  "<td>" . $_POST['codigo17'] . "</td>" . "<td>" . $_POST['descricao17'] . "</td>" . "<td>" . $_POST['qdte17'] . "</td>" . "<td>" . $_POST['und17'] . "</td>" . "</tr>";
            if ($produto17 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto17 = null;
            }

            $produto18 = "<tr>" .  "<td>" . $_POST['codigo18'] . "</td>" . "<td>" . $_POST['descricao18'] . "</td>" . "<td>" . $_POST['qdte18'] . "</td>" . "<td>" . $_POST['und18'] . "</td>" . "</tr>";
            if ($produto18 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto18 = null;
            }

            $produto19 = "<tr>" .  "<td>" . $_POST['codigo19'] . "</td>" . "<td>" . $_POST['descricao19'] . "</td>" . "<td>" . $_POST['qdte19'] . "</td>" . "<td>" . $_POST['und19'] . "</td>" . "</tr>";
            if ($produto19 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto19 = null;
            }

            $produto20 = "<tr>" .  "<td>" . $_POST['codigo20'] . "</td>" . "<td>" . $_POST['descricao20'] . "</td>" . "<td>" . $_POST['qdte20'] . "</td>" . "<td>" . $_POST['und20'] . "</td>" . "</tr>";
            if ($produto20 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto20 = null;
            }

            $produto21 = "<tr>" .  "<td>" . $_POST['codigo21'] . "</td>" . "<td>" . $_POST['descricao21'] . "</td>" . "<td>" . $_POST['qdte21'] . "</td>" . "<td>" . $_POST['und21'] . "</td>" . "</tr>";
            if ($produto21 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto21 = null;
            }

            $produto22 = "<tr>" .  "<td>" . $_POST['codigo22'] . "</td>" . "<td>" . $_POST['descricao22'] . "</td>" . "<td>" . $_POST['qdte22'] . "</td>" . "<td>" . $_POST['und22'] . "</td>" . "</tr>";
            if ($produto22 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto22 = null;
            }
            $produto23 = "<tr>" .  "<td>" . $_POST['codigo23'] . "</td>" . "<td>" . $_POST['descricao23'] . "</td>" . "<td>" . $_POST['qdte23'] . "</td>" . "<td>" . $_POST['und23'] . "</td>" . "</tr>";
            if ($produto23 == '<tr><td></td><td></td><td></td><td></td></tr>') {
                $produto23 = null;
            }


            


            $id = uniqid();


            // Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'S.A Online';
            $mail->Body    =


                "
    <style>
        table {
            width: 80%;
        }

        table,
        th,
        td {

            border: 1px solid black;
        }

        td {
            padding: 8px;
            text-align: left;
        }
        tr:hover {background-color: #f5f5f5}
    </style>
    <main>
        <div>
            <h3>Olá uma R.A foi gerada: #id $id; </h3>
        </div>
        $matnok
        <br>
        
        <div>
        $x
            

        </div>

        <br><hr>
       
        <div>
            <h4>Produtos Requisitados:</h4>
            <table>
                
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Quntidade</th>
                        <th>Und Med</th>
                    </tr>
                </thead>
                <tbody>
                
                    $produto0
                    $produto1
                    $produto2
                    $produto3   
                    $produto4
                    $produto5
                    $produto6
                    $produto7
                    $produto8
                    $produto9
                    $produto10
                    $produto11
                    $produto12
                    $produto13
                    $produto14
                    $produto15
                    $produto16
                    $produto17
                    $produto18
                    $produto19
                    $produto20
                    $produto21
                    $produto22
                    $produto22
                    $produto23 
                   
                    
                 
                </tbody>
            </table>

        </div>
    </main>
    <br> <br>
    <br> <br>
    <footer>
        <span><strong>Copyright &copy; 2021 PCM – MZBA</a></strong> </span>
    </footer>
    
    

    
    ";



            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
