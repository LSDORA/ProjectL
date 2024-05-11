<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nom', // Ajoutez les champs requis pour l'inscription
        'prenom',
        'datenaissance',
        'ville', 'droit','photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
        /**
     * Calculer l'âge de l'utilisateur.
     *
     * @return int
     */
    public function calculerAge(): int
    {
        // Calculer l'âge à partir de la date de naissance de l'utilisateur
        return Carbon::parse($this->datenaissance)->age;
    }
    protected static function boot()
    {
        parent::boot();

        
        static::saving(function ($user) {
         
            if (is_null($user->photo)) {
                
                $user->photo = 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=170667a&w=0&k=20&c=EqD6q8IUqwN_bgGec0UBhh3tk2Zuur5lezDDlQsGdPY=';
            }
        });
    }

    
}
