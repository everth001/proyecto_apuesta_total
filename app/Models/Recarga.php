<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    use HasFactory;
    protected $table = 'recarga_manuales';
    
    protected $fillable = [
        "cliente_id",
        "canal_id",
        "tipo_moneda_id",
        "monto",
        "voucher"
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function canal()
    {
        return $this->belongsTo(Canal::class);
    }

    public function tipoMoneda()
    {
        return $this->belongsTo(TipoMoneda::class);
    }
}
