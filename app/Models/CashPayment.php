<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashPayment extends Model
{
    use HasFactory;
    protected $table = 'cash_payments';
    protected $fillable = ['customer_name', 'status', 'customer_order', 'price', 'quantity', 'total_pay', 'cash_pay', 'change'];
}
