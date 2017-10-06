<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170925163046 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, game_mode_id INT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_232B318CE227FA65 (game_mode_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_mode (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, min_players INT NOT NULL, max_players INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_player (id INT AUTO_INCREMENT NOT NULL, game_id INT NOT NULL, is_reserve TINYINT(1) DEFAULT \'0\' NOT NULL, INDEX IDX_E52CD7ADE48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CE227FA65 FOREIGN KEY (game_mode_id) REFERENCES game_mode (id)');
        $this->addSql('ALTER TABLE game_player ADD CONSTRAINT FK_E52CD7ADE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE game_player DROP FOREIGN KEY FK_E52CD7ADE48FD905');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CE227FA65');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE game_mode');
        $this->addSql('DROP TABLE game_player');
        $this->addSql('DROP TABLE player');
    }
}
