<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $primaryKey = 'PesID';
    const CREATED_AT = 'PesCreatedAt';
    const UPDATED_AT = 'PesUpdatedAt';

    protected $fillable = ['PesNome', 'PesCPF', 'PesPhone', 'PesCEP', 'PesEndereco', 'PesComumID'];
}
