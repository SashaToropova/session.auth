<?php
interface IAuthenticatable {
public function storePassword($password);
public function verifyPassword($password);
}
class A implements IAuthenticatable {

public function __construct()
{
session_start();
}

public function storePassword($password)
{
$_SESSION['password'] = crypt($password);
}

public function verifyPassword($password)
{

return crypt($password, $_SESSION['password']) === $_SESSION['password'];
}
}
