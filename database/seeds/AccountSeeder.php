<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'VIOS Savings Account',
                'init_invest' => 38000,
                'start_date' => '2017-08-10',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'L&L Trust Fund',
                'init_invest' => 516000,
                'start_date' => '2020-04-22',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Justine M.D. Regular Account',
                'init_invest' => 167000,
                'start_date' => '2019-02-13',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
