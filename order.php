<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

include('Database.php');


session_start();

$pdo = new DataBase;
$pdo->connect();
$pdo->createTable();



$user = new UserData;
if ($user->checkData($_POST)) {
    $user->saveData($_POST);
    $user->checkCookie($_COOKIE);
    $user->checkSession($_SESSION);
 

    $dataUsers['id'] = $_SESSION['id'];
    $dataForm['id'] = $_SESSION['id'];
    $dataForm['name'] = $_POST['name'];
    $dataForm['email'] = $_POST['email'];
    $dataForm['phone'] = $_POST['phone'];
    $dataForm['present'] = $_POST['present'];
    $dataForm['comment'] = $_POST['comment'];

    
    $user->sendMailToAdmin($_FILES);
    $pdo->insertRecord($dataUsers, $dataForm);
    
    $user->sendMailToClient($dataForm['email']);
    $user->returnSuccess();

} else {
    $user->returnError($_POST);
}


class UserData
{
    public $name,
        $email,
        $phone,
        $present,
        $comment;

    public function checkData($data)
    {
        if (
            isset($data['name']) && $data['name']
            && isset($data['email']) && $data['email']
            && isset($data['phone']) && $data['phone']
        ) {
            return true;
        }
        return false;
    }

    public function saveData($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];

        $del = [' ', '(', ')', '-'];
        $num = str_split($data['phone']);
        $temp = array_diff($num, $del);
        for ($i = 0; $i < count($temp); $i++) {
            if ($temp[0] === '9') {
                $temp[0] = '+79';
            } else if ($temp[0] === '8') {
                $temp[0] = '+7';
            }
        }
        $num = implode("", $temp);
        $this->phone = $num;
        $_POST['phone'] = $num;
        $this->present = $data['present'];
        $this->comment = $data['comment'];

        setcookie('name', $_POST['name']);
        setcookie('email', $_POST['email']);
        setcookie('phone', $_POST['phone']);

        $_SESSION['id'] = time();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
    }

    public function returnSuccess()
    {
        header('location: /thanks.php?name=' . $_POST['name'] . '&phone=' . $this->phone);
    }

    public function returnError($data)
    {

        header('location: /?error=Поле обязательно к заполнению');
    }

    public function checkCookie($cookie)
    {
        if (isset($cookie['phone']) && $cookie['phone']) {
            setcookie('phone', $_POST['phone']);
        }
    }

    public function checkSession()
    {
        if (isset($_SESSION['phone']) && $_SESSION['phone']) {
            $_SESSION['phone'] = $_POST['phone'];
        }
    }

    public function sendMailToAdmin($files = [])
    {
        $mail = new PHPMailer();

        try {
            //Server settings

            $mail->isSMTP();
            $mail->Host       = 'smtp.yandex.ru';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'cinemaAdm';
            $mail->Password   = 'Pass123';
            $mail->CharSet = 'UTF-8';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Port = 465;

            $mail->setFrom('cinemaAdm@yandex.ru', 'Кинотеатр Иннополис');
            $mail->addAddress('bidonovn@yandex.ru', 'Admin');

            if ($files) {
                foreach ($files as $file) {
                    if ($file['name']) {
                        $temp_data = explode('.', $file['name']);
                        $extenssion = $temp_data[count($temp_data) - 1];
                        $name = $_SESSION['id'] . 'File' . '.' . $extenssion;
                        $dir = __DIR__ . '/clients/' . $_SESSION['id'] . '/';
                        mkdir($dir);
                        $upload_file = $dir . basename($name);
                        move_uploaded_file($file['tmp_name'], $upload_file);
                        
                        $mail->addAttachment($upload_file);
                    }
                }
            }

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Заявка с сайта';
            ini_set('date.timezone', 'Europe/Moscow');
            $message = '<body>';
            $message .= '<p>Новая заявка с сайта</p>';
            $message .= '<p>Клиент: ' . $this->name . '</p>';
            $message .= '<p>Телефон: ' . $this->phone . '</p>';
            $message .= '<p>E-mail: ' . $this->email . '</p>';
            $message .= '<p>Подарок: ' . $this->present . '</p>';
            $message .= '<p>Комментарий: ' . $this->comment . '</p>';
            $message .= '<p>Заявка создана: ' . date("d.m.Y H:i") . '</p>';
            $message .= '<p>Ссылка на admin ' . '<a>cinema.local/admin</a>' . '</p>';
            $message .= '</body>';
            $mail->Body    = $message;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function sendMailToClient($email)
    {
        $mail = new PHPMailer();

        try {
            //Server settings

            $mail->isSMTP();
            $mail->Host       = 'smtp.yandex.ru';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'cinemaAdm';
            $mail->Password   = 'Pass123';
            $mail->CharSet = 'UTF-8';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Port = 465;

            $mail->setFrom('cinemaAdm@yandex.ru', 'Кинотеатр Иннополис');
            $mail->addAddress($email, 'Client');


            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Заявка с сайта';
            $message = '<body>';
            $message .= '<p>Здравствуйте, ' . $this->name . '</p>';
            $message .= '<p>Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.</p>';
            $message .= '<p>Спасибо, что выбрали наш кинотеатр</p>';
            $message .= '<p><a style="text-decoration: underline; color:#ff0000">cinema.local</a></p>';
            $message .= '</body>';
            $mail->Body    = $message;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
