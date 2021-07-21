<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720122949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE instrument DROP imageurl');
        $this->addSql('ALTER TABLE user CHANGE gender gender ENUM(\'Homme\', \'Femme\', \'Autre\')');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64986CC499D ON user (pseudo)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE instrument ADD imageurl VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_8D93D64986CC499D ON user');
        $this->addSql('ALTER TABLE user CHANGE gender gender VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
