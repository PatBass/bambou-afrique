<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 11/21/13
 * Time: 4:29 PM
 */
class News
{
    protected $erreurs = array(),
        $id_news,
        $auteur,
        $titre,
        $contenu,
        $image,
        $dateAjout,
        $dateModif;

    const AUTEUR_INVALIDE = 1;
    const TITRE_INVALIDE = 2;
    const CONTENU_INVALIDE = 3;
    const IMAGE_INVALIDE=4;

    public function __construct($valeurs=array())
    {
        if(!empty($valeurs))
            $this->hydrate($valeurs);
    }

    public function hydrate($donnees)
    {
        foreach($donnees as $attribut => $valeur)
        {
            $methode = 'set'.ucfirst($attribut);

            if(is_callable(array($this, $methode)))
            {
                $this->$methode($valeur);
            }
        }
    }

    public function isNew()
    {
        return empty($this->id_news);
    }

    public function isValid()
    {
        return !(empty($this->auteur)|| empty($this->titre)|| empty($this->contenu));
    }

    //SETTERS
    public function setId_news($id)
    {
        $id = (int)$id;
        if($id>0){
            $this->id_news = $id;
        }
    }

    public function setAuteur($auteur)
    {
        if(!is_string($auteur)|| empty($auteur))
        {
            $this->erreurs[]= self::AUTEUR_INVALIDE;
        }
        else
        {
            $this->auteur=$auteur;
        }
    }

    public function setTitre($titre)
    {
        if(!is_string($titre)|| empty($titre))
            $this->erreurs[]=self::TITRE_INVALIDE;
        else
            $this->titre=$titre;
    }

    public function setContenu($contenu)
    {
        if(!is_string($contenu)|| empty($contenu))
            $this->erreurs[]=self::CONTENU_INVALIDE;
        else
            $this->contenu=$contenu;
    }

    public function setImage($image)
    {
        $this->image=$image;
    }

    public function setDateAjout($dateAjout)
    {
        if(is_string($dateAjout) && preg_match('#[0-9]{2}/[0-9]{2}/[0-9]{4} [0-9]{2}:[0-9]{2}#',$dateAjout))
            $this->dateAjout=$dateAjout;
    }

    public function setDateModif($dateModif)
    {
        if(is_string($dateModif) && preg_match('#[0-9]{2}/[0-9]{2}/[0-9]{4} [0-9]{2}:[0-9]{2}#',$dateModif))
            $this->dateModif=$dateModif;
    }

    //GETTERS

    public function erreurs()
    {
        return $this->erreurs;
    }

    public function id_news()
    {
        return $this->id_news;
    }

    public function auteur()
    {
        return $this->auteur;
    }

    public function titre()
    {
        return $this->titre;
    }

    public function contenu()
    {
        return $this->contenu;
    }

    public function image()
    {
        return $this->image;
    }

    public function dateAjout()
    {
        return $this->dateAjout;
    }

    public function dateModif()
    {
        return $this->dateModif;
    }
}