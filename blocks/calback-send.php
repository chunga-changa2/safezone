<?php
        $to = "mandagaev@gmail.com";
        $subject = 'Пользователь на сайте заполнил форму Обратный звонок'; //Заголовок сообщения
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers = 'From: office@safezone.nyc' . "\r\n" .
        'Reply-To: office@safezone.nyc' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <office@safezone.nyc>\r\n"; //Наименование и почта отправителя
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                    <table>
                    <tr>
                        <td style="color:#1a202c;">
                            <b>Номер телефона: </b>
                        </td>
                        <td style="color:#194bfb; font-weight:bold; padding-left:10px;">'.$_POST["phone"].'</td>
                        </tr>
                    </table>
                    </body>
                </html>'; //Текст сообщения
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <office@safezone.nyc>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>

<!--   <p>
<p style="color:red;">Телефон: '.$_POST['phone'].'</p>
Имя: '.$_POST['name'].'</p>

<p>Телефон: '.$_POST['phone'].'</p>
<p>Email: '.$_POST['email'].'</p>
<p>Регион: '.$_POST['region'].'</p>
<p>Сообщение: '.$_POST['text'].'</p>  -->