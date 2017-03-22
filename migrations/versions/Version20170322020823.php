<?php

namespace HelixMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170322020823 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql(
            'CREATE TABLE employees (
                 id INT NOT NULL AUTO_INCREMENT,
                 firstName VARCHAR(255) NOT NULL,
                 lastName VARCHAR(255) NOT NULL,
                 age int NOT NULL,
                 city VARCHAR(255) NOT NULL,
                 email VARCHAR(255) NOT NULL,
                 country VARCHAR(255) NOT NULL,
                 bankAccountNumber VARCHAR(255) NOT NULL,
                 creditCardNumber VARCHAR(255) NOT NULL,
                 created TIMESTAMP NOT NULL,
                 modified TIMESTAMP NOT NULL,
                 PRIMARY KEY(id)) ENGINE = InnoDB'
        );

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE employees');

    }
}
