<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Protection against mass Assignment 
     */
	
    protected $fillable = ['name', 'email'];
}
