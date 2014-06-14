<?php
class User
{
	private $id;
    private $login;
	private $prenom;
	private $nom;
    private $tel;
    private $adresse;
    private $cp;
    private $ville;
	private $mail;
    private $societe;
    private $pass;
    private $point;
	private $admin;

	public function construct()
	{

	}
	public function passwordVerify($password)
	{
		if ($this->pass == $password)
			return true;
		return false;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getLogin()
	{
		return $this->login;
	}
    public function getPrenom()
	{
		return $this->prenom;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getTel()
	{
		return $this->tel;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getcp()
	{
		return $this->cp;
	}
	public function getVille()
	{
		return $this->ville;
	}
	public function getMail()
	{
		return $this->mail;
	}
	public function getSociete()
	{
		return $this->societe;
	}
	public function getPass()
	{
		return $this->pass;
	}
	public function getPoint()
	{
		return $this->point;
	}
    public function getAdmin()
	{
		return $this->admin;
	}

    public function setLogin($login)
    {
        if ($login != '')
            $this->login = $login;
    }
    public function setPrenom($prenom)
    {
        if ($prenom != '')
            $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        if ($nom != '')
            $this->nom = $nom;
    }
    public function setTel($tel)
    {
        if ($tel != '')
            $this->tel = $tel;
    }
    public function setAdresse($adresse)
    {
        if ($adresse != '')
            $this->adresse = $adresse;
    }
    public function setCp($cp)
    {
        if ($cp != '')
            $this->cp = $cp;
    }
    public function setVille($ville)
    {
        if ($ville != '')
            $this->ville = $ville;
    }
    public function setMail($mail)
    {
        if ($mail != '')
            $this->mail = $mail;
    }
    public function setSociete($societe)
    {
        if ($societe != '')
            $this->societe = $societe;
    }
    public function setPass($pass)
    {
        if ($pass != '')
            $this->pass = $pass;
    }

    public function setPoint($point)
    {
        if ($point != '')
            $this->point = $point;
    }

    public function setAdmin($admin)
    {
        if ($admin != '')
            $this->admin = $admin;
    }
}
?>