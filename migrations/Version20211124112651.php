<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124112651 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE peinture 
            (
                id integer GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
                nom VARCHAR(255) NOT NULL, 
                largeur integer(6, 2) DEFAULT NULL, 
                hauteur integer(6, 2) DEFAULT NULL, 
                en_vente TINYINT(1) NOT NULL, 
                prix integer(10, 2) DEFAULT NULL, 
                date_realisation DATETIME DEFAULT NULL, 
                created_at DATETIME NOT NULL, 
                description TEXT NOT NULL, 
                portfolio TINYINT(1) NOT NULL, 
                slug VARCHAR(255) NOT NULL, 
                file VARCHAR(255) NOT NULL
                ) 
                ');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE peinture');
    }
}
