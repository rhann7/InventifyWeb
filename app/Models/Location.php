<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['workspace_id', 'name'];

    public function workspace() { return $this->belongsTo(Workspace::class); }
    public function units() { return $this->hasMany(Unit::class); }
}
