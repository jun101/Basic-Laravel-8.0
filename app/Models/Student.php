<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['lastname','firstname','dob','sex','email','password'];


    public function date(){
        $dob=Carbon::parse($this->dob);
        return $dob->format('d-M-Y');
    }
    public function dateView(){
        $dob=Carbon::parse($this->dob);
        return $dob->format('Y-m-d');
    }


}
