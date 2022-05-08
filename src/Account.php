<?php 

namespace App;

class Account{

    private string $password;

    /**
     * set la valeur du mot de passe 
     * 
     * @return void
     */

     public function setPassword(string $password): void
     {
        if (!preg_match('/[$*%]/', $password)) throw new \Exception('Le mot de passe doit être plus complexe (avec un caractère spécial)');
        
        $this->password = $password;
     }
}