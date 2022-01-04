<?php 

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Sao_Paulo');

    if($_POST['nome'] == "" || $_POST['email'] == "" || $_POST['telefone'] == ""){



    }else{

    	require_once("phpmailer/PHPMailerAutoload.php");

        $mail = new PHPMailer(true);

        $mail->IsSMTP();
        
        $charset   ='UTF-8';

        $host       ='smtp.hostinger.com.br';

        $smtpauth   = true;

        // PORTA 587 - SEM SSL
        $port       = 587;

        // PORTA 465 - COM SSL
        //$port       = 465;

        $username   = 'envio@beato.coffee';

        $password   = 'WPd1sP1R4D0R@2021#';

        $debug      = 0;


        $nome = $_POST['nome'];

        $email = $_POST['email'];

        $telefone = $_POST['telefone'];

        $utms = $_POST['utmcrm'];

        /*$estado = $_POST['Estado'];

        $cidade = $_POST['Cidade'];*/



        $mensagem = "";

        $mensagem .= "Nome: {$nome} <br/> ";

        $mensagem .= "Email: {$email} <br/> ";

        $mensagem .= "Telefone: {$telefone} <br/> ";

        $mensagem .= "UTMS: {$utms} <br/> ";

        /*$mensagem .= "Estado: {$estado} <br/> ";

        $mensagem .= "Cidade: {$cidade} <br/> ";*/


        $mail->CharSet     = $charset;

        $mail->Host        = $host;

        $mail->SMTPAuth    = $smtpauth;  

        $mail->Port       = $port; 

        $mail->Username    = $username;

        $mail->Password    = $password; 

        $mail->SMTPDebug  = $debug; 

        $mail->SetFrom('envio@beato.coffee', 'Leads Beato Coffee');

        $mail->AddReplyTo('leads@beato.coffee', 'Leads Beato Coffee');

        $mail->AddAddress('leads@beato.coffee', 'Leads Beato Coffee');

        //$mail->AddAddress('joao.220396@gmail.com', 'Leads Beato Coffee');

        $mail->Subject = 'Novo Lead Beato Coffee';

        $mail->MsgHTML($mensagem);

        $mail->Send();

        //die(var_dump($mail));
        
        /*if(!$mail->Send())
        {
            echo "Message was not sent";
            echo "Mailer Error: " . $mailer->ErrorInfo; exit; 

        }else{

            header("location: ../obrigado.php");
        
        }*/

        // CONEXAO DB
        require_once('connection.php');

        $id_cliente = 10061;
        $nome_cliente = "Beato Coffee";
        $email_lead = $_POST['email'];
        $telefone_lead = $_POST['telefone'];

        $utm_medium = $_POST['utmmedium'];
        $utm_campaign = $_POST['utmcampaign'];
        $utm_content = $_POST['utmcontent'];

        try {

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO tb_Leads (cl_idClientes, cl_Nome, cl_Email, cl_Telefone, cl_Cidade, cl_UF, cl_HorarioContato, cl_DataCadastro, cl_CapitalInvestimento, cl_InicioNegocio, cl_UTM_Medio, cl_UTM_Campaign, cl_UTM_Content, cl_UTM_Source) VALUES(:cl_idClientes, :cl_Nome, :cl_Email, :cl_Telefone, :cl_Cidade, :cl_UF, :cl_HorarioContato, :cl_DataCadastro, :cl_CapitalInvestimento, :cl_InicioNegocio, :cl_UTM_Medio, :cl_UTM_Campaign, :cl_UTM_Content, :cl_UTM_Source)');
            $stmt->execute(array(
                ':cl_idClientes' => $id_cliente,
                ':cl_Nome' => $nome_cliente,
                ':cl_Email' => $email_lead,
                ':cl_Telefone' => $telefone_lead,
                ':cl_Cidade' => '',
                ':cl_UF' => '',
                ':cl_HorarioContato' => '',
                ':cl_DataCadastro' => '',
                ':cl_CapitalInvestimento' => '',
                ':cl_InicioNegocio' => '',
                ':cl_UTM_Medio' => $utm_medium,
                ':cl_UTM_Campaign' => $utm_campaign,
                ':cl_UTM_Content' => $utm_content,
                ':cl_UTM_Source' => ''
            ));

            $contagem = $stmt->rowCount();

            if ($contagem >= 1) {
            	
            	header('Location: ../obrigado.php');

            }else{

            	echo "Algo deu errado!";

            }

        } catch(PDOException $e) {
        	
        	echo 'Error: ' . $e->getMessage();
        	return false;
        
        }
    }

?>