<?
if(!empty($_POST['emailAddress'])
    || !empty($_POST['name']))
{
	$to = "designer@stevesimoes.com"; // replace with your mail address
    $s_name = $_POST['name'];
    $s_mail = $_POST['emailAddress'];
    $subject = "Hire Me Contact Request";
	$body .= "Hire Me Contact Request\n\n";
	
	$body .= "Name: " . $_POST['name'];
	$body .= "\nE-mail: " . $_POST['emailAddress'];
	$body .= "\n\nMessage:\n" . $_POST['message'];
	
    $header = "From: $s_name <$s_mail>\n";
    $header .= "Reply-To: $s_name <$s_mail>\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\n";
    $header .= "X-Priority: 1";
    if(@mail($to, $subject, $body, $header))
    {
        //Redirect browser
		header("Location: hire-me.html?fail=success");
    } else {
		header("Location: hire-me.html?fail=totalfail");
    }
} else {
	header("Location: hire-me.html?fail=totalfail");
}
?> 