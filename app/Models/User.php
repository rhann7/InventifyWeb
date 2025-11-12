<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'avatar', 'role'];
    protected $hidden = ['password'];
    protected function casts(): array { return ['password' => 'hashed']; }

    public function isAdmin(): bool { return $this->role === 'admin'; }
    public function isUser(): bool { return $this->role === 'user'; }

    public function workspaces() { return $this->hasMany(Workspace::class); }
    public function items() { return $this->hasMany(Item::class); }
}
