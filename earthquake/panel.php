<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>


    <table id="customers">
        <tr>
            <th>NameSurname</th>
            <th>Telephone</th>
            <th>Mail</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>




        <?php 
    
    session_start();
    
    if($_SESSION['user']=="")
    {
        echo "<script>window.location.href='cikis.php'</script>";
    }
    
    else
    
    { /*PANELDE ÇIKIŞ YAP YERİ @@@@@*/
  echo "User Name : ".$_SESSION['user']."<br>";
        echo "<a href='cikis.php'>EXİT</a><br><br><br>";
        
        
include ("baglanti.php");

$sec="Select * From deprem";
$sonuc=$baglan->query($sec);
  /* YUKARDAKİ TABLONUN İÇERİSİNE EKLEME YAPACAĞIMIZ İÇİN PHP KODU BURAYA YAZDIK*/
/*NUM ROWS SATIR SAYIMIZ 0 DAN BÜYÜKSE İF DEKİ İŞLEMLERİ UYGULAR*/
if ($sonuc->num_rows>0)
{
    while($cek=$sonuc-> fetch_assoc())
    {
        echo    "
        
  <tr>

      <td>".$cek['adsoyad']."</td>
      <td>".$cek['telefon']."</td>
      <td>".$cek['email']."</td>
      <td>".$cek['konu']."</td>
      <td>".$cek['mesaj']."</td>
  </tr>
        ";
    }
}

else    
{
    echo    "Veritabanında Kayıtlı veri bulunamadı!";
    
}






        }

?>

    </table>

</body>

</html>