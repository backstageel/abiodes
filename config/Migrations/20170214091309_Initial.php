<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{

    public $autoId = false;

    public function up()
    {

        $this->table('groups')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 3,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->create();

        $this->table('liderancas')
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('organizacao_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('pessoa_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('data_criacao', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->create();

        $this->table('membros')
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('lideranca_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('pessoa_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->create();

        $this->table('organizacaos')
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('pessoa_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('data_criacao', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->create();

        $this->table('pessoas')
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('data_nascimento', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('telemovel', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('nuit', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('numero_bi', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->create();

        $this->table('users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('group_id', 'integer', [
                'default' => null,
                'limit' => 3,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('role', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('groups');
        $this->dropTable('liderancas');
        $this->dropTable('membros');
        $this->dropTable('organizacaos');
        $this->dropTable('pessoas');
        $this->dropTable('users');
    }
}
