<?php
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
?>