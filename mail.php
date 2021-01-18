<?php
	// $to = "klimovcode@mail.ru"; // емайл получателя данных из формы
	// $subject = "Форма обратной связи на PHP"; // тема полученного емайла
	// $message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
	// $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	// // $message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
	// $message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
	// $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
	// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
	// echo $message;
	// mail($to, $subject, $message, $headers); //отправляет получателю на емайл значения переменных
// mail('klimovcode@mail.ru', 'Тема письма', 'Текст письма', 'From: sergey.frolenko123@gmail.com');
if(mail('sergey.frolenko123@gmail.com', 'Тема письма', 'Отправка почты через локальный сервер openserver') ) {echo'Письмо успешно отправлено';
 }else{echo 'Ошибка';}
?>