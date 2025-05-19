<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250519141918 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE player DROP FOREIGN KEY FK_98197A65296CD8AE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player DROP FOREIGN KEY FK_98197A65D60322AC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player CHANGE team_id team_id INT DEFAULT NULL, CHANGE role_id role_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE SET NULL
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
            ALTER TABLE player CHANGE team_id team_id INT NOT NULL, CHANGE role_id role_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE player ADD CONSTRAINT FK_98197A65D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
    }
}
