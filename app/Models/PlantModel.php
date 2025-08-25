<?php
    namespace App\Models;

use CodeIgniter\Model;

class PlantModel extends Model
{
    protected $table = 'plant';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'productname', 'category', 'price', 'quantity',
        'wateringneed', 'sunlight', 'status', 'image'
    ];
}

?>