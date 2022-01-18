<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';
    protected $fillable = [
                            'ing1',
                            'ing2',
                            'ing3',
                            'ing4',
                            'ing5',
                            'ing6',
                            'ing7',
    ];
}
