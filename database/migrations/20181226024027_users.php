<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    public function up(){
        //创建表
        $table = $this -> table('users');
        $table -> addColumn('name', 'string')
               -> addColumn('email', 'string')
               -> addColumn('password', 'string')
               -> addColumn('avatar', 'string',['null' => true, 'default' => NULL, 'comment' => '用户头像'] )
               -> addColumn('god', 'boolean', ['default' => false, 'comment' => '管理员'])
               -> addTimestamps('create_at', 'update_at')
               -> addColumn('email', ['unique'=> true])
               -> addIndex('god')
               -> create();


    }
    public function down(){
        $this->dropTable('users');
    }
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {

    }
}
