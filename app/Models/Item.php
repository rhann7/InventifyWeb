<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['workspace_id', 'category_id', 'user_id', 'name', 'image', 'price', 'quantity'];

    public function user() { return $this->belongsTo(User::class); }
    public function workspace() { return $this->belongsTo(Workspace::class); }
    public function category() { return $this->belongsTo(Category::class); }
    public function units() { return $this->hasMany(Unit::class); }
}