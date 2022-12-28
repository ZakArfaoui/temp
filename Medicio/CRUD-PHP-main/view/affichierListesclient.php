<?php 
    require_once "./../controllers/clientC.php";
    $clientC = new clientC();
    $listeclient = $clientC->afficherclient();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" type="text/css" href="../styleCSS/style.css">
   
    
    
    <title>la liste des clients </title>
  
</head>

<body>
<div id="topbar" class="barre">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> BIENVENUE
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> +216 71 325 448
            </div>
        </div>
    </div>

    <div class="container pos">
        <br><br>
        <a href="./ajouterclient.php" class="btn btn-primary">add client</a>
        <br><br>
        <table class="table">
            <tr>
                <th>code</th>
                <th>nom du corps medical</th>
                <th>email professionnel</th>
                <th>adresse</th>
                <th>pays </th>
                <th>ville</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            <?php foreach($listeclient as $client) { ?>
            <tr>
                <td>
                    <?php echo $client['codec'] ?>
                </td>
                <td>
                    <?php echo $client['nomcm'] ?>
                </td>
                <td>
                    <?php echo $client['emailc'] ?>
                </td>
                <td>
                    <?php echo $client['adressec'] ?>
                </td>
                <td>
                    <?php echo $client['pays'] ?>
                </td>
                <td>
                    <?php echo $client['ville'] ?>
                </td>
                <td>
                    <form action="./supprimerclient.php" method="POST">
                        <input class="btn btn-danger" type="submit" value="delete">
                        <input type="hidden" name="code" value="<?=$client['codec']?>">
                    </form>
                </td>
                <td>
                    <a class="btn btn-warning" type="button" href="modifierclient.php?code=<?php echo $client['codec'];?>"> Modifier </a>
                </td>
            </tr>
            <?php }?>
        </table>
        <br><br><br>
<footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="footer-info">
                                    <h3>SahTec</h3>
                                    <p>
                                        <br> 51 , rue monji slim , Ariana <br><br>
                                        <strong>Phone:71 325 448</strong> <br>
                                        <strong>Email:</strong> SahTec216@gmail.tn<br>
                                    </p>
                                    <div class="social-links mt-3">
                                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About </a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                                </ul>
                            </div>


                            <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">


                                </form>


                            </div>
                        </div>
                    </div>

    </div>
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>