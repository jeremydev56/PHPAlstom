<?php
	require_once ("modele/modele.class.php"); 

	class Controleur {
		private $unModele ; 

		public function   __construct ($serveur, $bdd, $user, $mdp){
			//on instancie le modele 
			$this->unModele = new Modele ($serveur, $bdd, $user, $mdp); 
		}

		/******************************************Gestion des administrateurs******************************************/

		public function selectAllAdmins ()//modele ligne 20
		{
			//le controleur appelle le modèle
			$resultats = $this->unModele->selectAllAdmins ();
			return $resultats ;
		}

		public function selectWhereAdmin ($idadmin)//modele ligne 93
		{
			//on récupère l'admin avec cet ID
			return $this->unModele->selectWhereAdmin($idadmin);
		}

/******************************************Gestion des employés******************************************/

		public function selectAllEmployes ()//modele ligne 115
		{
			//le controleur appelle le modele
			$resultats = $this->unModele->selectAllEmployes ();
			//on peut réaliser des traitements sur les employés récupérés de la base de données avant de les envoyer à la vue.
			//on le fera plus tard
			return $resultats ;
		}

		public function selectWhereEmploye ($idemploye)
		{
			//on récupère l'employe avec cet ID
			return $this->unModele->selectWhereEmploye($idemploye);
		}

/******************************************Gestion des bus******************************************/

		 public function selectAllBus ()//modele ligne 194
		 {
		 	$resultats = $this->unModele->selectAllBus ();

		 	return $resultats;
		 }

		public function selectWhereBus ($idbus)//modele ligne 270
		{
			//on récupère le bus avec cet ID
			return $this->unModele->selectWhereBus($idbus);
		}

		public function updateBus ($idbus)//modele ligne 234
		{
			//Modification du membre
			$this->unModele->updateBus($idbus);
		}

		public function nombreDeBusParType($tab){
			return $this->unModele->nombreDeBusParType();
		}


/******************************************Gestion des métros******************************************/

		public function selectAllMetros()//modele ligne 291
		 {
		 	$resultats = $this->unModele->selectAllMetros ();

		 	return $resultats;
		 }


		public function selectWhereMetro ($idmetro)//modele ligne 364
		{
			//on récupère le métro avec cet ID
			return $this->unModele->selectWhereMetro($idmetro);
		}


		/******************************************Gestion des TGV******************************************/

		 public function selectAllTgv ()//modele ligne 194
		 {
		 	$resultats = $this->unModele->selectAllTgv ();

		 	return $resultats;
		 }

		public function selectWhereTgv ($idtgv)//modele ligne 270
		{
			//on récupère le tgv avec cet ID
			return $this->unModele->selectWhereTgv($idtgv);
		}


/******************************************Gestion des Véhicules******************************************/

		public function selectAllVehicules()//modele ligne 291
		 {
		 	$resultats = $this->unModele->selectAllVehicules();

		 	return $resultats;
		 }

		public function selectWhereVehicule ($idvehicule)//modele ligne 364
		{
			//on récupère le métro avec cet ID
			return $this->unModele->selectWherevehicule($idvehicule);
		}


		public function getTable (){
			return $this->unModele->getTable() ;
		}
		public function setTable ($uneTable)
		{
			$this->unModele->setTable($uneTable);
		}

		/***** fonction recherche **********/
        public function searchInSiteadmin()
        {
            $resultats = $this->unModele->searchInSiteadmin();

            return $resultats;
        }

        public function searchInSitebus()
        {
            $resultats = $this->unModele->searchInSitebus();

            return $resultats;
        }

        public function searchInSiteemploye()
        {
            $resultats = $this->unModele->searchInSiteemploye();

            return $resultats;
        }

        public function searchInSitemetro()
        {
            $resultats = $this->unModele->searchInSitemetro();

            return $resultats;
        }

        public function searchInSitetgv()
        {
            $resultats = $this->unModele->searchInSitetgv();

            return $resultats;
        }

        public function searchInSitevehicule()
        {
            $resultats = $this->unModele->searchInSitevehicule();

            return $resultats;
        }
/*** verif connexion ****/
      public function verification(){
          $this->unModele->verification();
      }

		
	}

?>