<?php
session_start();

if($_POST['submit']){
	if(strtolower(trim($_POST['res'])) == $_SESSION['res']){
		$to = 'mail@mail.ru';
		$subject = 'Письмо с сайта';
		$body = $_POST['text'];
		$headers = 'Content-type:text/plain; Charset=windows-1251';
		
		if(mail($to, $subject, $body, $headers)){
			$_SESSION['mes'] = 'Письмо отправлено!';
			header("Location: http://localhost:3000");
			exit();
		}else{
			$_SESSION['mes'] = '<p>Ошибка!</p>';
			header("Location: http://localhost:3000");
			exit();
		}
	}else{
		$_SESSION['mes'] = 'Дан неверный ответ!';
		header("Location: http://localhost:3000");
		exit();
	}
}
include 'bd.php';
$key = rand(0,count($question)-1); // ключ
$_SESSION['res'] = $question[$key][1]; // ответ
?>

