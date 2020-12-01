<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    /**
     * @var string
     */
    protected $table = 'anime';

    /**
     * @var array
     */
    protected $fillable = ['title', 'genre'];
}
