<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 27/11/2018
 * Time: 14:07
 */
namespace App;



use Illuminate\Database\Eloquent\Model;



class Product extends Model

{

    protected $fillable = [

        'name', 'phone', 'email', 'detail'

    ];

}