<?php
namespace AFMP\UserBundle\Services;

/**
 * Service pour créer un slug d'un chaine de caractère
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class Slugify
{
    /**
     * Méthode pour transformer un string
     * @param string $slug
     * @return string
     */
    public function slug($slug)
    {
        $slug = utf8_decode($slug);
        $slug = preg_replace("`\[.*\]`U", "", $slug);
        $slug = preg_replace('`&(amp;)?#?[a-z0-9]+;`i', '-', $slug);
        $slug = preg_replace("#(@|\#|\||\/|\\|\"|\'|%|\*|\$|€|!|\)|\(|\&|\<|\>|\=|\+|\:|\;|\`|\,|\?)#i", "", $slug);
        $slug = htmlentities($slug, ENT_NOQUOTES, 'ISO-8859-1');
        $slug = preg_replace("`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i", "\\1", $slug);
        $slug = preg_replace(array("`[^a-z0-9]`i","`[-]+`"), "-", $slug);
        $slug = strtolower(trim($slug, '-'));

        return $slug;
    }
}
