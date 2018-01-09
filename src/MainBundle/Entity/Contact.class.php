<?php

/**
* Classe représentant un contact, créée à l'occasion d'un TP du
* @author Patrick Ghislain BASSOUKISSA
* @version 2.0
*/
class Contact
{
	protected $erreurs = array(),
				$id,
				$nom,
				$prenom,
				$email,
				$message,
				$date_envoi;

	/**
	* Constantes relatives aux erreurs possibles rencontrées lors de l'exécution de la méthode
	*/				

	const NOM_INVALIDE = 1;
	const PRENOM_INVALIDE = 2;
	const MESSAGE_INVALIDE = 3;
	const EMAIL_INVALIDE = 4;

	/**
	* Constructeur de la classe qui assigne les données spécifiées en paramètre aux attributs correspondants
	* @param $valeurs array Les valeurs à assigner
	* @return void
	*/

	public function __construct($valeurs=array())				
	{
		if (!empty($valeurs)) 
		{
			$this->hydrate($valeurs);
		}
		
	}

	/**
	* Méthode assignant les valeurs spécifiées aux attributs correspondant
	* @param $donnees array Les données à assigner
	* @return void
	*/
	
	public function hydrate($donnees)
	{
		foreach ($donnees as $attribut => $valeur)
		{
			$methode = 'set'.ucfirst($attribut);

			if (is_callable(array($this, $methode)))
			{
				$this->$methode($valeur);
			}
		}
	}

	/**
	* Méthode permettant de savoir si le contact est nouveau, et ce afin d'éviter un double enregistrement
	* @return bool
	*/
	public function isNew()
	{
		return empty($this->id);
	}

	/**
	* Méthode permettant de savoir si le contact est valide
	* @return bool
	*/
	public function isValid()
	{
		return !(empty($this->nom) || empty($this->prenom) || empty($this->message) || empty($this->email));
	}


	// SETTERS //
	public function setId($id)
	{
		$id = (int)$id;

		$this->id = $id;
	}

	public function setNom($nom)
	{
		if (is_string($nom) && strlen($nom)<=50 && !empty($nom)) 
		{
			$this->nom = $nom;
		}
		else
		{
			$this->erreurs[]=self::NOM_INVALIDE;
		}			
	}

	public function setPrenom($prenom)
	{
		if (is_string($prenom) && strlen($prenom)<=50 && !empty($prenom)) 
		{
			$this->prenom = $prenom;
		}
		else
		{
			$this->erreurs[]=self::PRENOM_INVALIDE;
		}	
	}

	public function setMessage($message)
	{
		if (is_string($message) && !empty($message)) 
		{
			$this->message = $message;
		}
		else
		{
			$this->erreurs[]=self::MESSAGE_INVALIDE;
		}	
	}

	public function setEmail($email)
	{
		if (is_string($email) && preg_match('/^[A-Z0-9._-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z.]{2,6}$/i', $email)) 
		{
			$this->email = $email;
		}
		else
		{
			$this->erreurs[]=self::EMAIL_INVALIDE;
		}	
	}

	public function setDateAjout($dateAjout)
	{
		if (is_string($dateAjout) && preg_match('`le [0-9]{2}/[0-9]{2}/[0-9]{4} à [0-9]{2}h[0-9]{2}`', $dateAjout))
		$this->dateAjout = $dateAjout;
	}


	//LES GETTERS

	public function erreurs()
	{
		return $this->erreurs;
	}

	public function id()
	{
		return $this->id;
	}

	public function nom()
	{
		return $this->nom;
	}

	public function prenom()
	{
		return $this->prenom;
	}

	public function message()
	{
		return $this->message;
	}

	public function dateAjout()
	{
		return $this->dateAjout;
	}

	public function email()
	{
		return $this->email;
	}
}
