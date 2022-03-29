<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328185533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO items (\"name\", \"sell_in\", \"quality\", \"code_type\") VALUES
                                                  ('Aged Brie', 10,3, 'increases_proportion_age'),
                                                  ('Sulfuras', null, null, 'legendary'),
                                                  ('Backstage passes', 40, 8, 'increases_proportion_age'),
                                                  ('Сотворенный товар 1', 30, 7, 'conjured'),
                                                  ('Сотворенный товар 2', 32, 9, 'conjured'),
                                                  ('Обычный товар 1', 42, 9, 'usual'),
                                                  ('Обычный товар 2', 22, 9, 'usual');
                                                  ");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("TRUNCATE items");
    }
}
