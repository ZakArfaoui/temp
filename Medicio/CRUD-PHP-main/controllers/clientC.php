<?php 
    require_once "../view/config.php";
    require_once "../model/clientM.php";

    class clientC {

        function afficherclient() {
            $sql = "SELECT * FROM client";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function ajouterclient($client){
            $sql = "INSERT INTO client(codec,nomcm,emailc,adressec,pays,ville)
            VALUES(:code,:nom_du_corps_medical,:email_professionnel,:Adresse,:pays,:ville)";

            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'code' => $client->getcodeclient(),
                    'nom_du_corps_medical' => $client->getnom_du_corps_medical(),
                    'email_professionnel' => $client->getemail_professionnel(),
                    'Adresse' => $client->getAdresse(),
                    'pays' => $client->getpays(),
                    'ville' => $client->getville(),
                ]);
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        function supprimerclient($code){
            $db = config::getConnexion();
            $sql = "DELETE FROM client where codec=:code";

            try {
                $query = $db->prepare($sql);
                $query->bindValue(':code',$code);
                $query->execute();
            }catch(Exception $e){
				$e->getMessage();
			}
        }
        /*
        UPDATE `adherent` SET `NumAdherent` = '2', `Nom` = 'jallouli4', `Prenom` = 'yassine4',
         `Adresse` = 'rue d\'Aumale4', `Email` = 'yassinejall2oulitech@gmail.com',
          `DateInscription` = '2021-11-03' WHERE `adherent`.`NumAdherent` = 1
        */ 
		function modifierclient($client, $code){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
				'UPDATE client SET
				codec= :codec , nomcm = :nomcm,  emailc= :emailc ,adressec= :adressec,pays=:pays,ville=:ville
				WHERE codec= :codec');
				$query->execute([
					'codec' => $code,
					'nomcm' => $client->getnom_du_corps_medical(),
					'emailc' => $client->getemail_professionnel(),
					'adressec' => $client->getAdresse(),
					'pays' => $client->getpays(),
					'ville' => $client->getville() 
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();

			}
		}

        function getOneclient($code) {
			$sql="SELECT * from client where codec= ?";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute(array($code));

				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				echo $e->getMessage();
			}
        }
    }
?>