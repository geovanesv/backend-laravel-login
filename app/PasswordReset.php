<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';
    protected $fillable =[
        'email', 'token'
    ];
    public $updated_at = false;

}