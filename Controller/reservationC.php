<?php
	include '../config.php';
	include_once '../Model/reservation.php';
	class reservationC {

		function afficherreservation(){
			$sql="SELECT * FROM reservation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function rechercherid($id)
        {
            $requete = "select * from reservation where id_f like '$id'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $e) {
                 $th->getMessage();
            }
        }

		function supprimerreservation($id_reservation){
			$sql="DELETE FROM reservation WHERE id=:id_reservation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reservation', $id_reservation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterreservation($reservation){
			$sql="INSERT INTO reservation (id,id_user,id_f,dater) 
			VALUES (:id,:id_user,:id_f,:dater)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $reservation->getid_reservation(),
					'id_user' => $reservation->getiduser(),
					'id_f' => $reservation->getidformation(),
					'dater' => $reservation->getdate()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererreservation($id_reservation){
			$sql="SELECT * from reservation where id_reservation=$id_reservation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreservation($reservation, $id_reservation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET 
						id_user= :id_user, 
						id_f= :id_f,
                        dater=: dater 	
					WHERE id_reservation= :id_reservation'
				);
				$query->execute([
					'id_reservation' => $reservation->getid_reservation(),
					'id_user' => $reservation->getiduser(),
                    'id_f' => $reservation->getidformation(),
					'dater' => $reservation->getdate(),
					
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>