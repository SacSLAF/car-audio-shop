<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'vehicle_type',
        'vehicle_model',
        'vehicle_year',
        'services',
        'additional_notes',
        'preferred_date',
        'preferred_time',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'services' => 'array',
    ];

    public function getServicesListAttribute()
    {
        if (!$this->services) {
            return [];
        }
        return $this->services;
    }

    public function getStatusBadgeColorAttribute()
    {
        return match ($this->status) {
            'pending' => 'warning',
            'contacted' => 'info',
            'confirmed' => 'success',
            'completed' => 'primary',
            'cancelled' => 'danger',
            default => 'secondary',
        };
    }
}