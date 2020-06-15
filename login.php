<?php
include "database.php";
include "include.php";  
$vxod = $_POST['login'];
$password = $_POST['password'];
$out = false;
if (!empty($vxod) && !empty($password))
    {
        foreach ($users as $user)
        {
           if ($vxod == $user['login'] && $password == $user['password'])
           {
                   $out = true;
               switch ($user['role'])
               {
                   case 'admin':
                       {
                            $admin = new Admin($user['name'], $user['surname']);
                            $admin->adminGet();
                            break;
                       }
                   case 'manager':
                       {
                           $manager = new Manager($user['name'], $user['surname']);
                           $manager->managerGet();
                           break;
                        }
                  case 'client':
                  {
                      $client = new Client($user['name'], $user['surname']);
                      $client->clientGet();
                      break;
                  }
              }
           }
        }
        if (!$out)
        {
          
            header('location: error.php');
        }
    }
    else
        {
            
            header('location: error.php');
        }