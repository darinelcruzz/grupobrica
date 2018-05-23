<?php

namespace App\Models\Runa;

use Illuminate\Database\Eloquent\Model;

class RClient extends Model
{
    protected $fillable = [
    	'name', 'address', 'city', 'phone', 'rfc', 'email', 'contact',
    	'contact_phone', 'credit', 'discount'
    ];
}
