<?php
session_start();
class User
{
    protected $name;
    protected $surname;

    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
class Admin  extends User
{
    public function adminGet()
    {
        if($_SESSION['NowLang'] == "ru") {
            echo "Здравствуйте, Админ " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, удалять и создавать клиентов.";
        }
        elseif ($_SESSION['NowLang'] == "ua"){
            echo "Вітаю, Адмін ". $this->name . " " . $this->surname . ". Ви можете на сайті змінювати, видаляти і створювати клієнтів.";
        }
        else{
            echo "Hello, Admin " . $this->name . " " . $this->surname . ". You can modify, delete and create clients on the site.";
        }
    }
}
class Manager  extends User
{
    public function managerGet()
    {
        if ($_SESSION['NowLang'] == "ru") {
            echo "Здравствуйте, Менеджер " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, удалять и создавать клиентов.";
        } elseif ($_SESSION['NowLang'] == "ua") {
            echo "Вітаю, Менеджер " . $this->name . " " . $this->surname . ". Ви можете на сайті змінювати, видаляти і створювати клієнтів.";
        } else {
            echo "Hello, Manager " . $this->name . " " . $this->surname . ". You can modify, delete and create clients on the site.";
        }
    }
}
class Client extends  User
{
    public function clientGet()
    {
        if ($_SESSION['NowLang'] == "ru") {
            echo "Здравствуйте, Клиент " . $this->name . " " . $this->surname . ". Вы можете на сайте просматривать информацию доступную пользователям.";
        } elseif ($_SESSION['NowLang'] == "ua") {
            echo "Вітаю, Кліент " . $this->name . " " . $this->surname . ". Ви можете на сайті переглядати інформацію доступну користувачам.";
        } else {
            echo "Hello, Client " . $this->name . " " . $this->surname . ". You can view information available to users on the site.";
        }
    }
}
?>