
<html>

<head>
<link rel="Stylesheet" type="text/css" href="styl.css" />

</head>
<body>
<?php
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$telefon=$_POST['tel'];

if($imie='michal' && $nazwisko='budzilo')
{

?>
<h1 class="naglowek"> zalogowany poprawnie < /h1>
<?php
}
else
{
?>
<h1 class="naglowek"> bledne logowanie < /h1>
<a href="index.html> powrót </a>
<? }?>
</body></html>

