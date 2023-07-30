<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    // Order.php (assuming the model name is Order)
public function orderDetails()
{
    return $this->hasMany(order_details::class);
}

}
