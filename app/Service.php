<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function servicesEmployees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function servicesAppointments()
    {
        return $this->belongsToMany(Appointment::class);
    }
}
