<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211123161503 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de l\'entité User';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql
            ('CREATE TABLE justuser 
                (
                id integer GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
                email VARCHAR(180) NOT NULL UNIQUE, 
                roles JSON NOT NULL, 
                password VARCHAR(255) NOT NULL, 
                prenom VARCHAR(255) NOT NULL, 
                nom VARCHAR(255) NOT NULL, 
                telephone VARCHAR(255) NOT NULL, 
                a_propos LONGTEXT DEFAULT NULL, 
                instagram VARCHAR(255) DEFAULT NULL
                ) 
            
            ');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE justuser');
    }
}
