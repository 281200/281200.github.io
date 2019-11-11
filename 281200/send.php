<?php
	if(isset($_POST['submit'])){
		$to = "bliss.island13@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
		$from = $_POST['email'];
		$first_name = $_POST['first_name'];
		$subject = "Форма отправки сообщений с сайта";
		$subject2 = "Copy of your form submission";
		$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
		$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;

		mail($to,$subject,$message,$headers);
		echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
		echo "<br /><br /><a href='index.html'>Вернуться на сайт.</a>";
	}

?>

<script language="JavaScript" type="text/javascript">
	function changeurl(){eval(self.location="index.html");}
	window.setTimeout("changeurl();",3000);
</script>