<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "complaints";
    protected $fillable = ['customer_id', 'customer_name','status', 'complaint_desc', 'assigned_to'];
    
    public $timestamps = true;
}
