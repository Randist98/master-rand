<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts'; // Assuming the table name is 'contact_us'
    protected $fillable = [
        'name',
        'phone',
        'NoFamily',
        'Salary',
        'image',
        'address',
        'type',
        'description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
