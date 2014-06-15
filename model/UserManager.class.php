<?php
class UserManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}
	public function getUserByLogin($login)
	{

		$res = $this->db->query("SELECT * FROM user WHERE login=".$this->db->quote($login));
		$res->setFetchMode(PDO::FETCH_CLASS, 'User');
		$user = $res->fetch();

		return $user;
	}

    public function registerUser($user)
    {
//        $req = $this->db->prepare('INSERT INTO user values (:userSer)');
//            $req->execute(array(':userSer'=> serialize($user)));

//       die(var_dump($user));
        $login = $user->getLogin();
        $request = $this->db->prepare("INSERT INTO user (login)
        VALUES(:login)");
        $request->execute(array(":login"=>$login));




    }
    public function isAdmin($login)
    {
        $res = $this->db->query("SELECT login, admin FROM user WHERE login='".$login."' AND admin = 1");
        return $res;
    }
}
?>