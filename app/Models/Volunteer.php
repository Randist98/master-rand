<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['event_id ', 'user_id'];
    protected $table = 'volunteers';
    public function event()
{
    return $this->belongsTo(Event::class)->withDefault();
}
public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}


}
