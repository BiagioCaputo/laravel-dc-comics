<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    
    /*Attributi a cui viene consentito il caricamento con il form*/
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];
}
