<?php

namespace App\Security\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;
use App\Security\Models\Passwordless;
use App\Security\Models\PasswordlessEmails;
use Melisa\libraries\Uuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $user = $this->findUser('demo');        
        $this->createPasswordless('demo', $user->id, 'luisyosafat@gmail.com');        
    }
    
    public function createPasswordless($name, $idUser, $email, $dateExpiry = null)
    {
        static $tokenClass = null;
        static $idIdentityCreated = null;
        
        if( is_null($tokenClass)) {
            $tokenClass = app(Uuid::class);
            $idIdentityCreated = $this->findIdentity();
        }
        
        $token = $tokenClass->v5(config('app.name'));
        
        $passwordless = Passwordless::updateOrCreate([
            'name'=>$name,
        ], [
            'idUser'=>$idUser,
            'idIdentityCreated'=>$idIdentityCreated,
        ]);
        
        PasswordlessEmails::updateOrCreate([
            'idPasswordless'=>$passwordless->id,
            'email'=>$email
        ], [
            'idIdentityCreated'=>$identity->id,
            'token'=>$token,
            'dateExpiry'=>is_null($dateExpiry) ? 
                '2017-01-01 12:00:00' : $dateExpiry,
        ]);
    }
    
}
