<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointements';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'company_name', 'company_street', 'company_house', 'company_postal', 'company_locality', 'company_url', 'contact_number', 'contact_email', 'contact_salutation', 'contact_name', 'result_note', 'status'
    ];
}
