<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = ['amountPaymnt', 'cardNumber', 'expDate', 'nameOnCard', 'CCV', 'case_id', 'user_id'];
    protected $table = 'donors';

    public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}

public function case()
{
    return $this->belongsTo(Cases::class)->withDefault();
}

}


