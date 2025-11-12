<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'location_id', 'status_id', 'price', 'purchase_date', 'notes'];

    public function item() { return $this->belongsTo(Item::class); }
    public function location() { return $this->belongsTo(Location::class); }
    public function status() { return $this->belongsTo(Status::class); }
}
