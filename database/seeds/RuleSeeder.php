<?php

use Illuminate\Database\Seeder;
use App\Rule;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_rules = [
            [  
                'kode_rule'   =>  'R1',
                'if'          =>  '1,3,4,9',
                'goal'        =>  'G1',
            ],
            [  
                'kode_rule'   =>  'R2',
                'if'          =>  '1,3,4',
                'goal'        =>  'G2',
            ],
            [  
                'kode_rule'   =>  'R3',
                'if'          =>  '1,3,5,6',
                'goal'        =>  'G3',
            ],
            [  
                'kode_rule'   =>  'R4',
                'if'          =>  '2,3,4,9',
                'goal'        =>  'G4',
            ],
            [  
                'kode_rule'   =>  'R5',
                'if'          =>  '1,2,3,4,9',
                'goal'        =>  'G5',
            ],
            [  
                'kode_rule'   =>  'R6',
                'if'          =>  '1,3,4,7,8',
                'goal'        =>  'G6',
            ],
            [  
                'kode_rule'   =>  'R7',
                'if'          =>  '3,4,7,8',
                'goal'        =>  'G7',
            ],
            [  
                'kode_rule'   =>  'R8',
                'if'          =>  '3,7,8',
                'goal'        =>  'G8',
            ],
            [  
                'kode_rule'   =>  'R9',
                'if'          =>  '3,6,7,8',
                'goal'        =>  'G9',
            ],
            [  
                'kode_rule'   =>  'R10',
                'if'          =>  '1,3,4,5,6,7,8',
                'goal'        =>  'G10',
            ],
            [  
                'kode_rule'   =>  'R11',
                'if'          =>  '3,4,5,6,7,8',
                'goal'        =>  'G11',
            ],
        ];

        foreach ($arr_rules as $arr_rule) {
            $rule = new Rule;
            $rule->kode_rule = $arr_rule['kode_rule'];
            $rule->if = $arr_rule['if'];
            $rule->goal = $arr_rule['goal'];
            $rule->timestamps = false;
            $rule->save();
        }
    }
}