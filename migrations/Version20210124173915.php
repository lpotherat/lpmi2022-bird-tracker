<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210124173915 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE breed (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE observation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, breed_id INTEGER NOT NULL, observer_location VARCHAR(255) NOT NULL, distance_from_the_observer INTEGER NOT NULL, orientation_of_the_observer VARCHAR(255) DEFAULT NULL, land_type VARCHAR(255) DEFAULT NULL, bird_activity VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_C576DBE0A8B4A30F ON observation (breed_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE breed');
        $this->addSql('DROP TABLE observation');
    }
}
