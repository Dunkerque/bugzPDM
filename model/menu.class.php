<?php
class Menu
{
    private $id;
    private $libelle;
    private $descriptif;
    private $prix_livraison;
    private $prix_emporter;
    private $url;

    public function __construct()
    {

    }




    public function getId()
    {
        return $this->id;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle ;
    }


    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    public function getDescriptif()
    {
        return $this->descriptif;
    }




    public function setPrix_livraison($prix_livraison)
    {

        $this->prix_livraison = $prix_livraison;
    }

    public function getPrix_livraison()
    {
        return $this->prix_livraison;
    }

    public function setPrix_emporter($prix_emporter)
    {
        $this->prix_emporter = $prix_emporter;
    }

    public function getPrix_emporter()
    {
        return $this->prix_emporter;
    }

    public function serUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }









}
?>