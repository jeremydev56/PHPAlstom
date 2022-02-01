<?php

	class Modele {

		private $Pdo, $uneTable, $q; 

		public function __construct()
		{
			try
			{
			   $dsn = "mysql:host=localhost;dbname=ppe";
			  

				$this->pdo = new PDO($dsn, "root", "");
			}
			catch (PDOException $exp)
			{
				echo "Erreur de connexion au serveur localhost/ppe ";
				echo $exp->getMessage();
			}
		}


		public function searchInSiteadmin(){

			$table = $_SESSION['search'];
			$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

			$requete =
				"SELECT * from ".$table."
				WHERE nom LIKE '%$recherche%'
				OR prenom LIKE '%$recherche%'
				OR qualification LIKE '%$recherche%'
				OR tel LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

			$select = $this->pdo->prepare($requete);

			$select->execute();

			$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

			return $resultats;

		}

		public function searchInSitebus(){

			$table = $_SESSION['search'];
			$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

			$requete =
				"SELECT * from ".$table."
				WHERE matricule LIKE '%$recherche%'
				OR marque LIKE '%$recherche%'
				OR nbkm LIKE '%$recherche%'
				OR energie LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

			$select = $this->pdo->prepare($requete);

			$select->execute();

			$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

			return $resultats;

		}

		public function searchInSiteemploye(){

			$table = $_SESSION['search'];
			$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

			$requete =
				"SELECT * from ".$table."
				WHERE nom LIKE '%$recherche%'
				OR prenom LIKE '%$recherche%'
				OR qualification LIKE '%$recherche%'
				OR tel LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

			$select = $this->pdo->prepare($requete);

			$select->execute();

			$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

			return $resultats;

		}

		public function searchInSitemetro(){

			$table = $_SESSION['search'];
			$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

			$requete =
				"SELECT * from ".$table."
				WHERE matricule LIKE '%$recherche%'
				OR marque LIKE '%$recherche%'
				OR nbkm LIKE '%$recherche%'
				OR energie LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

			$select = $this->pdo->prepare($requete);

			$select->execute();

			$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

			return $resultats;

		}

			public function searchInSitetgv(){

				$table = $_SESSION['search'];
				$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

				$requete =
					"SELECT * from ".$table."
				WHERE matricule LIKE '%$recherche%'
				OR marque LIKE '%$recherche%'
				OR nbkm LIKE '%$recherche%'
				OR energie LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

				$select = $this->pdo->prepare($requete);

				$select->execute();

				$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

				return $resultats;

			}

			public function searchInSitevehicule(){

					$table = $_SESSION['search'];
					$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

					$requete =
						"SELECT * from ".$table."
				WHERE matricule LIKE '%$recherche%'
				OR marque LIKE '%$recherche%'
				OR nbkm LIKE '%$recherche%'
				OR energie LIKE '%$recherche%'
				OR anciennete LIKE '%$recherche%'
				LIMIT 10";

					$select = $this->pdo->prepare($requete);

					$select->execute();

					$resultats = $select->fetchAll(PDO::FETCH_ASSOC);

					return $resultats;

				}


		/*----------------------------------Fonctions gestion des ADMINISTRATEURS----------------------------------*/

		public function selectAllAdmins()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from admin";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}


		public function selectWhereAdmin($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from admin where idadmin = :idadmin ;";

	                $donnees = array(":idadmin"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unAdmin = $select->fetch();

	                return $unAdmin;
	            }
	        }


	        /*----------------------------------Fonctions gestion des EMPLOYES----------------------------------*/

		public function selectAllEmployes()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from employe";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}


		public function selectWhereEmploye($tab)
	        { 
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from employe where idemploye = :idemploye ;";

	                $donnees = array(":idemploye"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unEmploye = $select->fetch();

	                return $unEmploye;
	            }
	        }


	        /*----------------------------------Fonctions gestion des BUS----------------------------------*/

		public function selectAllBus()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from bus";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}


		public function selectWhereBus($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from bus where idbus = :idbus ;";

					$requeteCount = "SELECT count(*), ENERGIE FROM bus GROUP BY energie";

	                $donnees = array(":idbus"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unBus = $select->fetch();

	                return $unBus;
	            }
	        }

	        public function nombreDeBusParType($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requeteCount = "SELECT count(*), ENERGIE FROM bus GROUP BY energie";

	                $donnees = array(":idbus"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unBus = $select->fetchAll();

	                return $unBus;
	            }
	        }

	        public function updateBus($tab)
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
				$requete = "update bus set matricule = :matricule,
							marque =:marque, 
							nbkm = :nbkm,
							energie = :energie,
							anciennete = :anciennete,
							illustration = :illustration
							where idbus = :idbus;";

				$donnees = array(":idbus"=>$tab['idbus'],
								":matricule"=>$tab['matricule'],
								":marque"=>$tab['marque'],
								":nbkm"=>$tab['nbkm'],
								":energie"=>$tab['energie'],
								":anciennete"=>$tab['anciennete'],
								"illustration"=>$tab['illustration']
							);

				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}


	        /*----------------------------------Fonctions gestion des METROS----------------------------------*/

		public function selectAllMetros()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from metro";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}


		public function selectWhereMetro($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from metro where idmetro = :idmetro ;";

	                $donnees = array(":idmetro"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unMetro = $select->fetch();

	                return $unMetro;
	            }
	        }


	        /*----------------------------------Fonctions gestion des TGV----------------------------------*/

		public function selectAllTgv()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from tgv";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}

		

		public function selectWhereTgv($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from tgv where idtgv = :idtgv ;";

	                $donnees = array(":idtgv"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unTgv = $select->fetch();

	                return $unTgv;
	            }
	        }


		/*----------------------------------Fonctions gestion des VEHICULES----------------------------------*/

		public function selectAllVehicules()
		{
			if ($this->pdo == null)
			{
				return null;
			}
			else
			{
 				$requete = "select * from vehicule";

				$select = $this->pdo->prepare($requete);

		 		$select->execute();

		 		$resultats = $select->fetchAll();

		 		return $resultats;
		 	}
		}


		public function selectWhereVehicule($tab)
	        {
	            if ($this->pdo == null)
	            {
	                return null;
	            }
	            else
	            {
					$requete = "select * from vehicule where idvehicule = :idvehicule ;";

	                $donnees = array(":idvehicule"=>$tab);

	                $select = $this ->pdo->prepare($requete);

	                $select->execute($donnees);

	                $unVehicule = $select->fetch();

	                return $unVehicule;
	            }
	        }
		

		public function getTable (){
			return $this->uneTable ;
		}
		public function setTable ($uneTable)
		{
			$this->uneTable = $uneTable;
		}

		public function verification(){
		   $hash =hash('sha256',$_POST['password']);

		   $username = $_POST['username'];
		   $password = $_POST['password'];

		   if($username !== "" && $password !== "")
		   {
		      $requete = "SELECT count(*) FROM utilisateur where
		   nom_utilisateur = '".$username."' and mot_de _passe = '".$hash."' ";

		      $select = $this->pdo->prepare($requete);

		      $select->execute();

		      $resultats = $select->fetchAll();

		      $count = $resultats[0]['count(*)'];
		      if($count!=0) //nom d'utilisateur et mot de passe corrects
		      {
		         $_SESSION['username'] = $username;
		         header('Location: principale.php');
		      }
		      else
		      {
		         header('Location: login.php?erreur=1'); //utilisateur ou mot de passe incorrect
		      }
		   }
		   else
		   {
		      header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
		   }
		/*else
		   {
		      header('Location: login.php');
		   }*/
		}
		
	}
?>










