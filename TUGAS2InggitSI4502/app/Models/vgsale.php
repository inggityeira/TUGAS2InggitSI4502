<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vgsale extends Model
{
    use HasFactory;

    protected $table = 'vgsales';

    protected $primaryKey = 'Rank';

    public $timestamps = false;

    protected $fillable = [
        'Name', 'Platform', 'Year', 'Genre', 'Publisher', 'NA_Sales', 'EU_Sales', 'JP_Sales', 'Other_Sales', 'Global_Sales'
    ];
}
