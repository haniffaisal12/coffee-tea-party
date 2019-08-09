<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;

class Login extends Authenticable
{
    use Notifiable;
	
	public $table = 'login';
	
	protected $fillable = [
		'username', 'password',
	];
}
