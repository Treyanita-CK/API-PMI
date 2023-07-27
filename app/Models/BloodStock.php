<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class BloodStock extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'blood_stocks';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'gol_darah',
        'jenis',
        'jumlah',
    ];

    protected $hidden = [
        'jumlah',
    ];
}
