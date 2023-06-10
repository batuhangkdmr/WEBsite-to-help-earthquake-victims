<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Anasayfa - Deprem </title>
    <link rel="stylesheet" href="css1/stylelinks.css">
    <!FONTAWESOME İKONLARIMIZ ->
       <script src="https://kit.fontawesome.com/ffce289ef2.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1., maximum-scale=1.">
        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/owl.theme.default.min.css">

        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

        </style>

</head>

<body>

    <!--@@@@@@@@@@@@@@@@@@@@@@@@ LOGO BÖLGESİ @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Quake</a>
        <a href="#yardım">Urgent Needs</a>
        <a href="#iletisim">Disaster Relief Organizations</a>
        <a href="#iletisim">Contact Form</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>



    <section id="anasayfa">
        <h2>What to do during an earthquake</h2>
        <p>1-Stay Calm: It is very important to stay calm during an earthquake. In situations of anxiety and panic, it becomes difficult to make the right decision. Therefore, try to remain calm.</p>
        <p>2-Be Careful When Leaving Home: After an earthquake, check your home for damage. Be careful and do not pass near collapsed or collapsed structures.</p>
        <p>3-Do Not Use Elevators: Do not use elevators during an earthquake. Elevators may get stuck or the security system may fail. Instead, use the stairs.</p>
        <p>4-First Aid: Try to give first aid to people who are injured or in an emergency after an earthquake. Avoid actions that could worsen the condition of an injured person. Don't forget to call an ambulance.</p>
        <p>5-Do Not Leave the House: Do not leave the house during the earthquake. If the building collapses, the safest place is in a sheltered area inside the building to avoid being trapped under the debris.</p>
        <p>6-Be Careful When Leaving Home: After an earthquake, check your home for damage. Be careful and do not pass near collapsed or collapsed structures.</p>
    </section>
    <!--@@@@@@@@@@@@@@@@@@@@@@@@ YARDIM BÖLGESİ @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

    <section>
        <div id="yardım">


            <div>
                <h4 class="baslikk">General Needs</h4>
                <a href="#" class="dd">Safe Gathering Areas</a>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">address</th>
                            <th scope="col">Map</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Account">Tokat Merkez</td>
                            <td data-label="Due Date">
                                Yeni Mah., Tokat Merkez‎, Tokat, Türkiye</td>
                            <td data-label="Map"><a href="https://www.google.com/maps?q=latitude,longitude" target="_blank" class="dds">View Map</a></td>
                        </tr>
                        <tr>
                            <td data-label="Account">Tokat Merkez</td>
                            <td data-label="Due Date">
                                Yeni Mah., Tokat Merkez‎, Tokat, Türkiye</td>
                            <td data-label="Map"><a href="https://www.google.com/maps?q=latitude,longitude" target="_blank" class="dds">View Map</a></td>
                        </tr>




                    </tbody>
                </table>

                <h3>Last updated Date : <time datetime="2023-05-13T12:00:00Z">13:05:2023 02:35</time></h3>
            </div>
        </div>
    </section>

    <!--@@@@@@@@@@@@@@@@@@@@@@@@EN ALTTAKİ FORUM YERİ @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">Emergency and location information</h3>

            <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <! PLACEHOLDER YER TUTUCU ve REQUİRED ZORUNLU DEMEK ->
                                <input type="text" name="isim" placeholder="Name Surname" class="form-control">
                                <input type="text" name="tel" placeholder="Phone Number" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email" class="form-control">
                            <input type="text" name="konu" placeholder="Topic Title" required class="form-control">
                        </div>
                        <! TEXTAREA AŞŞADAKİ MESAJ BOŞLUĞU->
                            <textarea name="mesaj" id="" cols="30" placeholder="Write Message" rows="10" required class="form-control"></textarea>
                            <! AŞŞADAKİ GÖNDER BUTONU ->
                                <input type="submit" value="Submit">

                    </div>

                </div>
            </form>
            <footer>

                <div id="copyright"> 2023 All rights reserved</div>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="# "><i class="fa-brands fa-twitter social"></i></a>

                </div>

                <a href="#myTopnav"><i class="fa-sharp fa-solid fa-angle-up" id="up"></i></a>
            </footer>

        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
</body>

</html>




<?php 

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    
    
    $ekle="INSERT INTO deprem (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    
    if($baglan->query($ekle)===TRUE)
    {
        // Mesaj başarıyla gönderildi, sayfayı yenile
        echo "<script>alert('Mesajınız başarı ile gelmiştir. ')</script>";
        echo "<meta http-equiv='refresh' content='0'>";
    }
    
    else{
        echo "<script>alert('Mesajınız iletilmedi!!!')</script>";
    }
    
}

?>
