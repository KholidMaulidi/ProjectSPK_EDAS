<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DecisionMatrix;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = "alternatif";
    protected $fillable = [
        'id',
        'nama_alternatif',
    ];

    public function decision_matrix()
    {
        return $this->hasMany(DecisionMatrix::class, 'id_alternatif', 'id');
    }

    public function isUsed()
    {
        // Pemeriksaan apakah id_alternatif telah digunakan di tabel decision_matrix
        return DecisionMatrix::where('id_alternatif', $this->id)->exists();
    }
}
