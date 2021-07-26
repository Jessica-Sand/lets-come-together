<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210726100246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64961778466');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F1B3F295');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649708A0E0 ON user (gender_id)');
        $this->addSql('DROP INDEX fk_8d93d649f1b3f295 ON user');
        $this->addSql('CREATE INDEX IDX_8D93D649F1B3F295 ON user (departments_id)');
        $this->addSql('DROP INDEX fk_8d93d64961778466 ON user');
        $this->addSql('CREATE INDEX IDX_8D93D64961778466 ON user (availability_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64961778466 FOREIGN KEY (availability_id) REFERENCES availability (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F1B3F295 FOREIGN KEY (departments_id) REFERENCES department (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649708A0E0');
        $this->addSql('DROP INDEX IDX_8D93D649708A0E0 ON user');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F1B3F295');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64961778466');
        $this->addSql('DROP INDEX idx_8d93d649f1b3f295 ON user');
        $this->addSql('CREATE INDEX FK_8D93D649F1B3F295 ON user (departments_id)');
        $this->addSql('DROP INDEX idx_8d93d64961778466 ON user');
        $this->addSql('CREATE INDEX FK_8D93D64961778466 ON user (availability_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F1B3F295 FOREIGN KEY (departments_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64961778466 FOREIGN KEY (availability_id) REFERENCES availability (id)');
    }
}
