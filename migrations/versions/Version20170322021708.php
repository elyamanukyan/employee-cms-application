<?php

namespace HelixMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170322021708 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql(
            'CREATE TABLE addresses (
                 id INT NOT NULL AUTO_INCREMENT,
                 emp_id int NOT NULL,
                      FOREIGN KEY (emp_id) REFERENCES employees(id) ON DELETE CASCADE,
                 address VARCHAR(255) NOT NULL,
                 PRIMARY KEY(id)) ENGINE = InnoDB'
        );

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE addresses');

    }
}
