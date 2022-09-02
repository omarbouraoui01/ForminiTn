<?php

    require_once '..\..\config.php';
    require_once '..\..\Model/user.php';


    Class userC {

        function afficheruser()
        {
            $requete = "select * from user";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function searchuser($search)
        {
            $requete = "select * from user  WHERE Nom LIKE '%$search%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function getuserbyID($id)
        {
            $requete = "select * from user where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouteruser($user)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO user
                (nom,prenom,sexe,email,logg,daten,pass,rol)
                VALUES
                (:nom,:prenom,:sexe,:email,:logg,:daten,:pass,:rol)
                ');
                $querry->execute([
                    
                    'nom'=>$user->getNom(),
                    'prenom'=>$user->getprenom(),
                    'sexe'=>$user->getsexe(),
                    'email'=>$user->getmail(),
                    'logg'=>$user->getlog(),
                    'daten'=>$user->getdate(),
                    'pass'=>$user->getpass(),
                    'rol'=>$user->getrole()
                    
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifieruser($user)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare("
                UPDATE user SET
                nom=:nom,prenom=:prenom,sexe=:sexe,email=:email,logg=:logg,daten=:daten,pass=:pass,rol=:rol
                where id=:id");
                $querry->execute([
                    'id'=>$user->getid(),
                    'nom'=>$user->getNom(),
                    'prenom'=>$user->getprenom(),
                    'sexe'=>$user->getsexe(),
                    'email'=>$user->getmail(),
                    'logg'=>$user->getlog(),
                    'daten'=>$user->getdate(),
                    'pass'=>$user->getpass(),
                    'rol'=>$user->getrole()
                    
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function supprimeruser($id)
        {
            $sql="DELETE FROM user WHERE id= :id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }

        function recupMail($id){
            $db = config::getConnexion();
            $sql="SELECT email FROM user where id=$id";
           
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }	
        function recuprole($id){
            $db = config::getConnexion();
            $sql="SELECT rol FROM user where email=$id";
           
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }	
          

        function connexionUser($email,$password)
		{
			$db = config::getConnexion();
			$sql = "SELECT * FROM user WHERE email='" . $email . "'and pass= '". $password." ' " ;
			try
			{
				$query=$db->prepare($sql);
				$query->execute();
				$count=$query->rowCount();
				$result = $query->fetch(PDO::FETCH_OBJ);
				if($count==0)
				{
					$message="pseudo ou le mot de passe est incorrect";
				}
				else
				{
					$x=$query->fetch();
					$message=$x['email'];
					$_SESSION['nom'] = $result->nom ;
					$_SESSION['id'] = $result->id ;
					$_SESSION['prenom']=$result->prenom ;
					$_SESSION['email']=$result->email ;
                    $_SESSION['rol']=$result->rol;
					echo "$message";

				}
				

			}
			catch (Exception $e)
				{
					$message= " ".$e->getMessage();
				}

			return $message;
		}

        function trierNom()
    {
       $sql = "SELECT * from user ORDER BY nom ASC";
       $db = config::getConnexion();
       try {
           $req = $db->query($sql);
           return $req;
       } catch (Exception $e)
        {
           die('Erreur: ' . $e->getMessage());
       }
    }


    }