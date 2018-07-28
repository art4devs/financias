<?php


use Phinx\Migration\AbstractMigration;

class CreateCategoryCostsTable extends AbstractMigration
{
    /**
     * executa a migracao
     *
     */
    public function up()
    {
        $this->table('category_costs')
            ->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    /**
     * reverte a migracao
     *
     */
    public function down()
    {
        $this->table('category_costs')->drop()->save();
    }
}
