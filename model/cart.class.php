<?php
class Cart
{
   private $id;
   private $id_categorie;
   private $libelle;
   private $descriptif;
   private $prix_livraison;
   private $url;


    public function getId()
    {
        return $this->id;
    }

    public function getIdCategorie()
    {
        return $this->id_categoried;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getDescritif()
    {
        return $this->descriptif;
    }

    public function getPrixLivraison()
    {
        return $this->prix_livraison;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setLibelle($libelle)
    {
        if($libelle != "")
            $this->libelle = $libelle;
    }

    public function setDescritif($descriptif)
    {
        if($descriptif != "")
            $this->descriptif = $descriptif;
    }
    public function setPrixLivraison($prix_livraison)
    {
        if($prix_livraison != "")
         $this->prix_livraison = $prix_livraison;
    }
    public function setUrl($url)
    {
        if($url != "")
        $this->url = $url;
    }

}

?>