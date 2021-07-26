<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210726151841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE availability (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, number INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gender (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instrument (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, icon VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE style (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, departments_id INT NOT NULL, availability_id INT DEFAULT NULL, gender_id INT NOT NULL, cities_id INT NOT NULL, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, pseudo VARCHAR(50) NOT NULL, email VARCHAR(150) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(100) NOT NULL, age SMALLINT DEFAULT NULL, influence LONGTEXT DEFAULT NULL, experience SMALLINT DEFAULT NULL, bio LONGTEXT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, perimeter INT DEFAULT NULL, status TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D64986CC499D (pseudo), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649F1B3F295 (departments_id), INDEX IDX_8D93D64961778466 (availability_id), INDEX IDX_8D93D649708A0E0 (gender_id), INDEX IDX_8D93D649CAC75398 (cities_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_instrument (user_id INT NOT NULL, instrument_id INT NOT NULL, INDEX IDX_9BD8AF31A76ED395 (user_id), INDEX IDX_9BD8AF31CF11D9C (instrument_id), PRIMARY KEY(user_id, instrument_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_style (user_id INT NOT NULL, style_id INT NOT NULL, INDEX IDX_D17F4332A76ED395 (user_id), INDEX IDX_D17F4332BACD6074 (style_id), PRIMARY KEY(user_id, style_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_app (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, status TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_22781144E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F1B3F295 FOREIGN KEY (departments_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64961778466 FOREIGN KEY (availability_id) REFERENCES availability (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CAC75398 FOREIGN KEY (cities_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE user_instrument ADD CONSTRAINT FK_9BD8AF31A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_instrument ADD CONSTRAINT FK_9BD8AF31CF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_style ADD CONSTRAINT FK_D17F4332A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_style ADD CONSTRAINT FK_D17F4332BACD6074 FOREIGN KEY (style_id) REFERENCES style (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64961778466');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649CAC75398');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F1B3F295');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649708A0E0');
        $this->addSql('ALTER TABLE user_instrument DROP FOREIGN KEY FK_9BD8AF31CF11D9C');
        $this->addSql('ALTER TABLE user_style DROP FOREIGN KEY FK_D17F4332BACD6074');
        $this->addSql('ALTER TABLE user_instrument DROP FOREIGN KEY FK_9BD8AF31A76ED395');
        $this->addSql('ALTER TABLE user_style DROP FOREIGN KEY FK_D17F4332A76ED395');
        $this->addSql('DROP TABLE availability');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP TABLE instrument');
        $this->addSql('DROP TABLE style');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_instrument');
        $this->addSql('DROP TABLE user_style');
        $this->addSql('DROP TABLE user_app');
    }
}
