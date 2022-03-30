<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329192904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO items (\"name\", \"sell_in\", \"quality\", \"code_type\", \"created_at\") VALUES
                                                  ('Aged Brie', 10,3, 'increases_proportion_age', now()),
                                                  ('Sulfuras', null, 80, 'legendary', now()),
                                                  ('Backstage passes', 40, 8, 'increases_proportion_age', now()),
                                                  ('Сотворенный товар 1', 30, 7, 'conjured', now()),
                                                  ('Сотворенный товар 2', 32, 9, 'conjured', now()),
                                                  ('Обычный товар 1', 42, 9, 'usual', now()),
                                                  ('Обычный товар 2', 22, 9, 'usual', now());
                                                  ");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("TRUNCATE items");
    }
}
