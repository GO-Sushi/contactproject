<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ContactModels extends Model{
    protected $table = 'contact';
    protected $allowedFields = ['ContactId','FirstName','LastName','Company','JobTitle','Email','Phone','Notes'];
}