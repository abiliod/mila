<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder{
    /**
    * @return void
    */
    public function run(){

        if(User::where('email','=','admin@mila.com.br')->count()){
            $usuario = User::where('email','=','admin@mila.com.br')->first();
            $usuario->name = "Ludmilla Costa";
            $usuario->email = "admin@mila.com.br";
            $usuario->password = bcrypt("12345678");
            $usuario->save();
        }else{
            $usuario = new User();
            $usuario->name = "Ludmilla Costa";
            $usuario->email = "admin@mila.com.br";
            $usuario->password = bcrypt("12345678");
            $usuario->save();
        }
       echo "\n Usuario Master criado com sucesso!"
        ,"\n email = admin@mila.com.br"
        ,"\n password = 12345678";
    }
}
