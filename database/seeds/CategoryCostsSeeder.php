<?php

use Phinx\Seed\AbstractSeed;

class CategoryCostsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $ccTable      = $this->table('category_costs');
        $faker        = Faker\Factory::create('pt_BR');
        $registers    = 10;
        $categories   = [];

        while ($registers > 0) {
            $categories[] = [
                'name'       => $faker->name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $registers--;
        }
        $ccTable->insert($categories)->save();
    }
}
