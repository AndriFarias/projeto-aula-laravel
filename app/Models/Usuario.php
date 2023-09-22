<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function lista_usuario() {
        $usuarios = [
            ['nome'=> 'Andrielly','cpf'=> '000.000.000-00','email'=> 'andry@gmail.com', 'telefone'=>'89865655','endereco'=>'Rua A'],
            ['nome'=> 'Gisele','cpf'=> '000.000.111-00', 'email'=> 'gisele@gmail.com','telefone'=>'5456576','endereco'=>'Rua B'],
            ['nome'=> 'Gustavo','cpf'=> '000.222.000-00', 'email'=> 'gustavo@gmail.com','telefone'=>'35778989','endereco'=>'Rua C']
        ];
        return $usuarios;
    }
    public function idade(){
        $idade = 15;
        return $idade;
    }
     
}
