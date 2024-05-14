<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    const PENDING_STATUS = 0;
    const COMPLETED_STATUS = 1;

    protected $fillable = [
        "tipo_documento",
        "numero_documento",
        "nombres",
        "apellidos",
        "email",
        "telefono",
        "direccion",
        "tipo_monedas_id",
        "saldo",
        "status"
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getStatusTextAttribute()
    {
        if ($this->status == self::PENDING_STATUS) {
            return 'PENDIENTE';
        } else if ($this->status == self::COMPLETED_STATUS) {
            return 'COMPLETADO';
        } else {
            return '-';
        }
    }
}
