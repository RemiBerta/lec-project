<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250520125854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player DROP FOREIGN KEY FK_731A713C83C33C5C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player DROP FOREIGN KEY FK_731A713C99E6F5DF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dream_team_player
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33CA76ED395 ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD jungle_id INT DEFAULT NULL, ADD mid_id INT DEFAULT NULL, ADD adc_id INT DEFAULT NULL, ADD support_id INT DEFAULT NULL, CHANGE user_id top_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CC82CB256 FOREIGN KEY (top_id) REFERENCES player (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CCCB60965 FOREIGN KEY (jungle_id) REFERENCES player (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CBCCED46D FOREIGN KEY (mid_id) REFERENCES player (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CAE4BE81E FOREIGN KEY (adc_id) REFERENCES player (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33C315B405 FOREIGN KEY (support_id) REFERENCES player (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33CC82CB256 ON dream_team (top_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33CCCB60965 ON dream_team (jungle_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33CBCCED46D ON dream_team (mid_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33CAE4BE81E ON dream_team (adc_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33C315B405 ON dream_team (support_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE dream_team_player (dream_team_id INT NOT NULL, player_id INT NOT NULL, INDEX IDX_731A713C83C33C5C (dream_team_id), INDEX IDX_731A713C99E6F5DF (player_id), PRIMARY KEY(dream_team_id, player_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player ADD CONSTRAINT FK_731A713C83C33C5C FOREIGN KEY (dream_team_id) REFERENCES dream_team (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team_player ADD CONSTRAINT FK_731A713C99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CC82CB256
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CCCB60965
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CBCCED46D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33CAE4BE81E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team DROP FOREIGN KEY FK_BB94F33C315B405
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33CC82CB256 ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33CCCB60965 ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33CBCCED46D ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33CAE4BE81E ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BB94F33C315B405 ON dream_team
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD user_id INT DEFAULT NULL, DROP top_id, DROP jungle_id, DROP mid_id, DROP adc_id, DROP support_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dream_team ADD CONSTRAINT FK_BB94F33CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BB94F33CA76ED395 ON dream_team (user_id)
        SQL);
    }
}
