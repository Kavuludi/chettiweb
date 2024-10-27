<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone_no',
        'id_index_no',
        'gender',
        'm_status',
        'county',
        'sub_county',
        'location',
        'postal_address',
        'parent_name',
        'parent_contact',
        // Course Selection
        'selection1',
        'selection2',
        'selection3',
        'prefered_intake',
        // Attachment
        'result_slip',
        'birth_cert',
        'bank_slip'
    ];
}
