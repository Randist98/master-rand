<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'beneficiary',
        'NoBeneficiary',
        'amountCollected',
        'totalAmount',
        'image' => 'default_image.jpg',
    ];

}
