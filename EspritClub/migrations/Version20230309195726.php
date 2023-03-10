<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309195726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classeroom (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club (ref INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(ref)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (nsc INT NOT NULL, classrooms_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_B723AF333F1EEE2A (classrooms_id), PRIMARY KEY(nsc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_club (student_id INT NOT NULL, club_id INT NOT NULL, INDEX IDX_87CD43AACB944F1A (student_id), INDEX IDX_87CD43AA61190A32 (club_id), PRIMARY KEY(student_id, club_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF333F1EEE2A FOREIGN KEY (classrooms_id) REFERENCES classeroom (id)');
        $this->addSql('ALTER TABLE student_club ADD CONSTRAINT FK_87CD43AACB944F1A FOREIGN KEY (student_id) REFERENCES student (nsc)');
        $this->addSql('ALTER TABLE student_club ADD CONSTRAINT FK_87CD43AA61190A32 FOREIGN KEY (club_id) REFERENCES club (ref)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF333F1EEE2A');
        $this->addSql('ALTER TABLE student_club DROP FOREIGN KEY FK_87CD43AACB944F1A');
        $this->addSql('ALTER TABLE student_club DROP FOREIGN KEY FK_87CD43AA61190A32');
        $this->addSql('DROP TABLE classeroom');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE student_club');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
