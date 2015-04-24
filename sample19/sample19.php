<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

if(!empty($_POST['email'])){
	$to = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$from = mb_encode_mimeheader(mb_convert_encoding("みのもつよし", "JIS","UTF-8"))."<support@h2o-space.com>";
	$success = mb_send_mail($to, $subject, $body, "From:". $form);
}
?>

<?php
if ($success) {
	print('送信しました')
} else {
	print('送信に失敗しました')
}
?>