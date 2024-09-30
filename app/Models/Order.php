<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'invitation_id',
        'amount',
        'status',
        'payment_method',
        'transaction_id',
        'order_data',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'order_data' => 'array',
    ];

    // Relationships

    /**
     * Get the customer who placed the order.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the invitation associated with the order.
     */
    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }

    /**
     * Get the payment for the order.
     */
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
