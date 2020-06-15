<?php
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
?>