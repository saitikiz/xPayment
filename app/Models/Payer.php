<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payer extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'payers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'sumsub_token',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function payerTransactionxes()
    {
        return $this->hasMany(Transactionx::class, 'payer_id', 'id');
    }

    public function payerPayerSites()
    {
        return $this->hasMany(PayerSite::class, 'payer_id', 'id');
    }
}
