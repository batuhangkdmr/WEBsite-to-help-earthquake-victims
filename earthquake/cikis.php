<?php 
session_start();// Oturum yönetimini başlatır ve $_SESSION süper global dizisine erişimi sağlar.
$_SESSION=array();////dizisini boş bir diziye atayarak oturumda tutulan tüm verileri temizler.

session_destroy(); //Mevcut oturumu sonlandırır ve oturum verilerini temizler.

header("location:panelgiris.php"); //Tarayıcıya bir yönlendirme komutu gönderir ve kullanıcıyı "panelgiris.php" adlı bir sayfaya yönlendirir.

?>