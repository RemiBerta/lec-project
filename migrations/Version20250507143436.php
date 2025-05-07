<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250507143436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD team_id INT NOT NULL, ADD role_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65D60322AC FOREIGN KEY (role_id) REFERENCES role (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_98197A65296CD8AE ON player (team_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_98197A65D60322AC ON player (role_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE player DROP FOREIGN KEY FK_98197A65296CD8AE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player DROP FOREIGN KEY FK_98197A65D60322AC
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_98197A65296CD8AE ON player
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_98197A65D60322AC ON player
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player DROP team_id, DROP role_id
        SQL);
    }
}
