<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414125333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chiffre_affaire CHANGE pourcent_petite pourcent_petite NUMERIC(10, 0) DEFAULT NULL, CHANGE pourcent_moyenne pourcent_moyenne NUMERIC(10, 0) DEFAULT NULL, CHANGE pourcent_grosse pourcent_grosse NUMERIC(10, 0) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chiffre_affaire CHANGE pourcent_petite pourcent_petite INT DEFAULT NULL, CHANGE pourcent_moyenne pourcent_moyenne INT DEFAULT NULL, CHANGE pourcent_grosse pourcent_grosse INT DEFAULT NULL');
    }
}
