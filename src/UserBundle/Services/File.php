<?php
namespace AFMP\UserBundle\Services;

/**
 * Classe pour la gestion de l'upload de fichiers
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class File
{
    private $slugify;
    private $originalFilename;
    private $filename;
    private $extension;
    private $sizeof;
    private $sizeMax;
    private $validExt;
    private $destination;
    private $webDir;

    /**
     * Injection du service slugify
     * @param Slugify $slugify
     * @param String  $kernelDir
     */
    public function __construct($slugify, $kernelDir)
    {
        $this->slugify = $slugify;
        $this->webDir = dirname($kernelDir).'/web/';
    }

    /**
     * Configure et test si l'upload peut avoir lieu
     * @param UploadFile $file
     * @return boolean
     */
    private function setConfig($file)
    {
        $this->originalFilename = $file->getClientOriginalName();
        $this->extension = $file->guessExtension();
        if (is_array($this->validExt) && count($this->validExt) > 0) {
            if (!in_array($this->extension, $this->validExt)) {
                return false;
            }
        }
        $this->sizeof = $file->getSize()/1024/1024;
        if (!empty($this->sizeMax) && $this->sizeof > $this->sizeMax) {
            return false;
        }
        if (!empty($this->filename)) {
            $fileInfos = pathinfo($this->filename);
        } else {
            $fileInfos = pathinfo($this->originalFilename);
        }
        $this->filename = $this->slugify->slug($fileInfos['filename']).'.'.$this->extension;
        $this->createUniqueFile();

        return true;
    }

    /**
     * @param Objet  $file         Objet issu du formulaire exemple = $form['filephoto']
     * @param string $chemin       Chemin ou le fichier doit être envoyé exemple "melodyfilebundle/images/photo/"
     * @param string $nomDuFichier Nom sous lequelle le fichier doit être enregistré (sans l'extension) exemple = "photo" si non définit = on prend le nom du fichier
     * @param array  $validExtArr  Tableau contenant les extensions accéptées exemple array('jpg','jpeg','gif','png','pdf') si non définit = tout accepté
     * @param string $sizeMax      Poid maximum du fichier (en MO) exemple "5" si non définit = fichier de toutes tailles accéptés
     * @return filename
     */
    public function upload($file, $chemin='upload/', $nomDuFichier='', $validExtArr='', $sizeMax='')
    {
        if (substr($chemin, -1, 1) == '/') {
            $this->destination = $chemin;
        } else {
            $this->destination = $chemin.'/';
        }
        if (!empty($nomDuFichier)) {
            $this->filename = $nomDuFichier;
        } else {
            $this->filename = '';
        }
        if (!empty($validExtArr) && is_array($validExtArr)) {
            $this->addValidExt($validExtArr);
        } else {
            $this->validExt = '';
        }
        $this->sizeMax = $sizeMax;
        if (!$this->setConfig($file)) {
            return false;
        }

        return $this->goUpload($file);
    }

    /**
     * Upload le fichier
     * @param UploadFile $file
     * @return string
     */
    private function goUpload($file)
    {
        $file->move($this->webDir.$this->destination, $this->filename);

        return $this->filename;
    }

    /**
     * Création d'un nom unique pour éviter l'écrasement de fichiers
     */
    private function createUniqueFile()
    {
        $i = 0;
        while (file_exists($this->webDir.$this->destination.$this->filename)) {
            $nomDuFichierBrut = preg_replace('/.'.$this->extension.'/', '', $this->filename);
            if ($i>0) {
                $arr = explode('_', $nomDuFichierBrut);
                $supCompteur = $arr[count($arr)-1];
                $nomDuFichierBrut = preg_replace('/_'.$supCompteur.'/', '', $nomDuFichierBrut);
            }
            $this->filename = $nomDuFichierBrut.'_'.$i.'.'.$this->extension;
            $i++;
        }
    }

    /**
     * Ajoute les extensions valide en majuscule et minuscule
     * @param array $arr
     */
    private function addValidExt($arr)
    {
        $arrExt = array();
        foreach ($arr as $ext) {
            $arrExt[] = strtolower($ext);
            $arrExt[] = strtoupper($ext);
        }
        $this->validExt = $arrExt;
    }
}
