<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
        'level'
    ];

    public static function fieldLabels(){
        return [
            'name' => 'Nombre',
            'strength' => 'Fuerza',
            'dexterity' => 'Destreza',
            'constitution' => 'Constitución',
            'intelligence' => 'Inteligencia',
            'wisdom' => 'Sabiduría',
            'charisma' => 'Carisma',
            'level' => 'Nivel',
        ];
    }
}
