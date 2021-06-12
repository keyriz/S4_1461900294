<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'kamar';

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = false;

    protected $fillable = ['id_pasien', 'id_dokter'];

    /**
    * Get the pasien that owns the kamar.
    */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    /**
    * Get the dokter that owns the kamar.
    */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
