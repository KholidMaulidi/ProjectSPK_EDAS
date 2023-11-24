<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DecisionMatrix;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = "kriteria";
    protected $fillable = [
        'id',
        'nama_kriteria',
        'bobot_kriteria',
        'jenis_kriteria',
    ];

    public function decision_matrix()
    {
        return $this->hasMany(DecisionMatrix::class, 'id_kriteria', 'id');
    }
}
