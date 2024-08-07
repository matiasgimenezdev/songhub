<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class FavoriteTableMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table("FAVORITE", ['id' => false, 'primary_key' => ['CONTENT_ID', 'USER_ID']]);
        $table->addColumn('USER_ID', 'integer', ['signed' => false, 'null' => false]);
        $table->addColumn('CONTENT_ID', 'string', ['limit' => 255, 'null' => false]);
        $table->addForeignKey('USER_ID', 'USER', 'USER_ID');
        $table->addForeignKey('CONTENT_ID', 'CONTENT', 'CONTENT_ID');
        $table->create();
    }
}
