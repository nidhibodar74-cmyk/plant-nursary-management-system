
<?php

//namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{

public function up()
{
    $this->forge->addField([
        'id' => ['type' => 'INT', 'auto_increment' => true],
        'product_name' => ['type' => 'VARCHAR', 'constraint' => 100],
        'category' => ['type' => 'VARCHAR', 'constraint' => 50],
        'price' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
        'quantity' => ['type' => 'INT'],
        'watering_need' => ['type' => 'VARCHAR', 'constraint' => 100],
        'sunlight' => ['type' => 'VARCHAR', 'constraint' => 100],
        'status' => ['type' => 'ENUM', 'constraint' => ['Available', 'Out of Stock'], 'default' => 'Available'],
        'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'created_at' => ['type' => 'DATETIME', 'default' => 'CURRENT_TIMESTAMP'],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('plants');
}




    public function down()
    {
        //
    }
}
?>
