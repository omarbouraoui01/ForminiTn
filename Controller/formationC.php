<?php

    require_once '..\..\config.php';
    require_once '..\..\Model\formation.php';


    Class formationC {

        function afficherformation()
        {
            $requete = "select * from formation";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                //$result = $querry->fetchAll(PDO::FETCH_COLUMN, 1);
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        

        function getformationbyID($id)
        {
            $requete = "select * from formation where id=:id";
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

        function getformationbyTitle($titre){
            $req = "select * from formation where titre = :titre";
            $config = config::getConnexion();
            try{
                $query = $config->prepare($req);
                $query->execute(['titre'=>$titre]);
                $result = $query->fetch();
                return $result;
            } catch(PDOException $th){
                $th->getMessage();
            }
        }

        function ajouterformation($formation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO formation
                (titre,type,adresse ,categorie, img, prix, duree, datef,idf,vente,nb_avis,note )
                VALUES
                (:titre,:type,:adresse, :categorie, :img, :prix, :duree, :datef, :idf,:vente,:nb_avis,:note)
                ');
                
               $rs=$querry->execute([
                    
                    'titre'=>$formation->gettitre(),
                    'type'=>$formation->gettype(),
                    'adresse'=>$formation->getad(),
                    'categorie'=>$formation->getcat(),
                    'img'=>$formation->getimg(),
                    'prix'=>$formation->getPrix(),
                    'duree'=>$formation->getduree(),
                    'datef'=>$formation->getdate(),
                    'idf'=>$formation->get_idf(),
                    'vente'=>$formation->get_vente(),
                    'nb_avis'=>$formation->getavis(),
                    'note'=>$formation->getnote()
                   
                ]);
                if ($rs) {
                    echo "Accounted Created";
                }
                else {
                    echo "ERROR";
                }
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        
        function modifierformation($formation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE formation SET
                titre=:titre,type=:type,adresse=:adresse,categorie=:categorie,img=:img,prix=:prix,duree=:duree,datef=:datef,vente=:vente,nb_avis=:nb_avis,note=:note
                where id=:id');
                
                $querry->execute([
                    'id'=>$formation->getid(),
                    'titre'=>$formation->gettitre(),
                    'type'=>$formation->gettype(),
                    'adresse'=>$formation->getad(),
                    'categorie'=>$formation->getcat(),
                    'img'=>$formation->getimg(),
                    'prix'=>$formation->getPrix(),
                    'duree'=>$formation->getduree(),
                    'datef'=>$formation->getdate()

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function supprimerformation($id)
        {
            $sql="DELETE FROM formation WHERE id= :id_user";
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

        function augmenterVente($string){
            $requete = "update formation set vente = vente + 1 where titre=:string";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(['string'=>$string]);
            }
            catch (PDOException $th) {
                $th->getMessage();
           }
        }

        function Noter($id, $review){
            $requete = "update formation set nb_avis = nb_avis + 1, note = ((note + :review) / nb_avis) where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(['id'=>$id, 'review'=>$review]);
            }
            catch (PDOException $th) {
                $th->getMessage();
           } 
        }

        function afficherCateg($string)
        {
            $requete = "select * from formation where categorie=:categ";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(['categ'=>$string]);
                //$result = $querry->fetchAll(PDO::FETCH_COLUMN, 1);
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }