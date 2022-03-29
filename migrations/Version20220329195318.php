<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329195318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("UPDATE items SET code_type = 'backstage_passes' WHERE name='Backstage passes'");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("UPDATE items SET code_type = 'increases_proportion_age' WHERE name='Backstage passes'");
    }
}
