<?
$to_email="arun.pandey@slrtce.in";
$subject ="simple email viA PHP";
$body ="hi,this is text email send by php script in ";
$headers="From: hostroot343@gmail.com";
if(mail($to_email,$subject,$body,$headers)){
    echo "Email successfully send to $to_email..";

}else{
    echo "Email sending failed";
}






?>