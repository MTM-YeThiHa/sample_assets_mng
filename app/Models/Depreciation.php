<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciation extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number',
        'assets_class',
        'assets_name',
        'units',
        'acquisition_date',
        'acquisition_cost',
        'deduct',
        'net_cost',
        'dep_percent',
        'dep_month',
        'opening_date',
        'written_off_acc_date',
        'written_off_expense',
        'net_book_value',
        'remark',
    ];
}
