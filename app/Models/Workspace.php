<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description'];

    public function user() { return $this->belongsTo(User::class); }
    public function categories() { return $this->hasMany(Category::class); }
    public function locations() { return $this->hasMany(Location::class); }
    public function statuses() { return $this->hasMany(Status::class); }
    public function items() { return $this->hasMany(Item::class); }
}
