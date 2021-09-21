<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210921115837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_product CHANGE main_taxon_id main_taxon_id INT DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, ADD color color VARCHAR(255) DEFAULT NULL, ADD displayColor displayColor TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
       $this->addSql('ALTER TABLE sylius_product CHANGE main_taxon_id main_taxon_id INT DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE color color VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE displayColor displayColor TINYINT(1) DEFAULT \'NULL\'');
    }
}
