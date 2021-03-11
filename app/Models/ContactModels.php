<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ContactModels extends Model{
    protected $table = 'contacts';
    protected $allowedFields = ['id ','first_Name','last_Name','company','job','email','phone','note','favory','createDate','image'];
}