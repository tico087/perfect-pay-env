<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_method', 'amount', 'status', 'transaction_id', 'payment_link', 'qr_code', 'customer_credit_card_id'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function customerCreditCard(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
