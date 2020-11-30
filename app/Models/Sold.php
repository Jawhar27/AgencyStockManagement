<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    protected $fillable = [
    'Date',
    'Area',
    'Invoice_No',
    'Sales_value',
    'Discount',
    'Net_value',
    'Type_of_Payment',
    'Amount'
    ];
}
