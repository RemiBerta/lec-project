<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250520123548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE dream_team (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_BB94F33CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dream_team_player (dream_team_id INT NOT NULL, player_id INT NOT NULL, INDEX IDX_731A713C83C33C5C (dream_team_id), INDEX IDX_731A713C99E6F5DF (player_id), PRIMARY KEY(dream_team_id, player_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player ADD CONSTRAINT FK_731A713C83C33C5C FOREIGN KEY (dream_team_id) REFERENCES dream_team (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player ADD CONSTRAINT FK_731A713C99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player DROP FOREIGN KEY FK_731A713C83C33C5C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player DROP FOREIGN KEY FK_731A713C99E6F5DF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dream_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dream_team_player
        SQL);
    }
}
