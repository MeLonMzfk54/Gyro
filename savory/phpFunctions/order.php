<?php
	require_once('connect.php');
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $count = $_POST["count"];
    $title = $_POST["title"];
//    $sql = "INSERT INTO orders (title,count,name,tel) VALUES('$title','$count','$name','$tel')";
//    mysqli_query($conn,$sql);
    $sql = "SELECT * FROM products where NameProd = '$title'";
    $result = mysqli_query($conn,$sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($products as $prod){
        $popular = $prod['Popular'];
        echo $popular;
        $popular++;
//        $sql = "UPDATE products SET Popular = $popular where NameProd = '$title'";
//        mysqli_query($conn,$sql);
         }
//        require_once("phpmailer/PHPMailerAutoload.php");
//        $mail = new PHPmailer;
//        $mail->CharSet = 'utf-8';
//        
//        $mail->isSMTP();
//        $mail->Host = "smtp.mail.ru";
//        $mail->SMTPAuth = true;
//        $mail->Username = 'fortniteyt2001@mail.ru';
//        $mail->Password = 'krovatshkolnika';
//        $mail->SMTPSecure = 'ssl';
//        $mail->Port = 465;
//        
//        $mail->setFrom('fortniteyt2001@mail.ru');
//        $mail->addAddress("garifullin.tosha@mail.ru");
//        
//        $mail->isHTML(true);
//        
//        $mail->Subject = 'Тестовая заявка';
//        $mail->Body = ''.$name.' Оставил заявку, его телефон '.$phone;
//        $mail->AltBody = '';
    mail("garifullin.tosha@mail.ru","Тема письма","Проверка отправки почты через опенсервер");


?>