<?php 
         require_once"./../controllers/clientC.php";
         require_once"./../model/clientM.php";

         $client = null;
         $clientC = new clientC();
        
        if(  isset($_POST['code']) &&
             isset($_POST['nom_du_corps_medical']) &&
             isset($_POST['email_professionnel']) &&
             isset($_POST['Adresse']) &&
             isset($_POST['pays']) &&
             isset($_POST['ville']) ){
             
        if( !empty($_POST['code'])&&
            !empty($_POST['nom_du_corps_medical'])&&
            !empty($_POST['email_professionnel'])&&
            !empty($_POST['Adresse'])&&
            !empty($_POST['pays'])&&
            !empty($_POST['ville']))
            {
               
                $client = new client (
                $_POST['code'],
                $_POST['nom_du_corps_medical'],
                $_POST['email_professionnel'],
                $_POST['Adresse'],
                $_POST['pays'],
                $_POST['ville']);

                $clientC->modifierclient($client,$_GET['code']);
                header("Location:./affichierListesclient.php");
            }else
            echo "ERROR";
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./../styleCSS/index.css">
    <title>Title</title>
</head>

<body>


    <div class="container">

        <h1 style="text-align: center;">UPDATE client</h1>

        <?php
        if (isset($_GET['code'])){
              $client = $clientC->getOneclient($_GET['code']);
		?>
        <form action="" method="POST">

            <div class="form-outline">
                <input value="<?php echo $client['codec'] ?>" name="code" type="text" id="code" class="form-control" />
                <label class="form-label" for="code">code</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $client['nomcm'] ?>" name="nom_du_corps_medical" type="text" id="nom_du_corps_medical" class="form-control" />
                <label class="form-label" for="nom_du_corps_medical">nom du corps medical </label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $client['emailc'] ?>" name="email_professionnel" type="email" id="email_professionnel" class="form-control" />
                <label class="form-label" for="email_professionnel">email professionnel </label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $client['adressec'] ?>" name="Adresse" type="text" id="Adresse" class="form-control" />
                <label class="form-label" for="Adresse">Adresse</label>
            </div>
            <div class="form-outline">
                <input value="<?php echo $client['pays'] ?>" name="pays" type="text" id="pays" class="form-control" />
                <label class="form-label" for="Email">Pays</label>
            </div>
            <div class="form-outline">

                <input value="<?php echo $client['ville'] ?>" name="ville" type="texte" id="ville" class="form-control" />
            </div>

            <input style="float:right;" type="submit" class="btn btn-black" value="Update client">

        </form>
        <?php
         }	 
        ?>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>