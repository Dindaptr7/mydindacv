<?php 
namespace App\Models;

use CodeIgniter\Model;

class DindaModel extends Model
{
    protected $table = 'mydinda';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'ttl', 'umur', 'tinggal'];
}