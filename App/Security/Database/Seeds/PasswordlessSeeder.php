<?php namespace App\Security\Database\Seeds;

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
        $identity = $this->findIdentity();
        $token = app(Uuid::class)->v5(config('app.name'));
        
        $passwordless = Passwordless::updateOrCreate([
            'name'=>'demo',
        ], [
            'idUser'=>$user->id,
            'idIdentityCreated'=>$identity->id,
        ]);
        
        PasswordlessEmails::updateOrCreate([
            'idPasswordless'=>$passwordless->id,
            'email'=>'carlaedith@gmail.com'
        ], [
            'idIdentityCreated'=>$identity->id,
            'token'=>$token,
            'dateExpiry'=>'2017-01-01 12:00:00',
        ]);
        
        $token = app(Uuid::class)->v5(config('app.name'));
        $user = $this->findUser('developer');
        
        $passwordless = Passwordless::updateOrCreate([
            'name'=>'Gods',
        ], [
            'idUser'=>$user->id,
            'idIdentityCreated'=>$identity->id,
        ]);
        
        PasswordlessEmails::updateOrCreate([
            'idPasswordless'=>$passwordless->id,
            'email'=>'luisyosafat@gmail.com'
        ], [
            'idIdentityCreated'=>$identity->id,
            'token'=>$token,
            'dateExpiry'=>'2017-01-01 12:00:00',
        ]);
        
    }
    
}
