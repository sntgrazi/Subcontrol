<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    // Significa que os campos a seguir podem ser preenchidos em massa
    // ou seja, podem ser preenchidos diretamente em uma requisição
    // Exemplo: User::create($request->all());
    // Isso é útil para evitar a necessidade de preencher cada campo individualmente
    // no controller ou em outro lugar.
     protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     // Significa que os campos a seguir não serão retornados

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // Significa que os campos a seguir serão convertidos para o tipo especificado
    // Exemplo: 'email_verified_at' => 'datetime' significa que o campo 'email_verified_at'
    // será convertido para o tipo datetime quando for retornado
    // Isso é útil para garantir que os dados sejam retornados no formato correto
    // e para evitar erros de conversão.
    // Exemplo: 'is_admin' => 'boolean' significa que o campo 'is_admin' será convertido
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }
}
