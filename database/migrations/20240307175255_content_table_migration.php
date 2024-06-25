<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ContentTableMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table("CONTENT", ['id' => 'CONTENT_ID']);
        $table->addColumn('AVERAGE_RATING', 'float', ['null' => true]);
        $table->addColumn('RELEASE_DATE', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('SPOTIFY_ID', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('SPOTIFY_API_URL', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('SPOTIFY_URL', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('SPOTIFY_PREVIEW_URL', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('TITLE', 'string', ['limit' => 120, 'null' => false]);
        $table->addColumn('TYPE', 'char', ['limit' => 1, 'null' => false]);
        $table->addColumn('COVER_ID', 'integer', ['signed' => false, 'null' => false]);
        $table->addColumn('ARTIST_ID', 'integer', ['signed' => false, 'null' => false]);
        $table->addForeignKey('COVER_ID', 'COVER', 'COVER_ID');
        $table->addForeignKey('ARTIST_ID', 'ARTIST', 'ARTIST_ID');
        $table->create();
    }
}