<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded =[];

    protected $attributes =[
        'status'=>'1'
    ];

    public function getStatusAttribute($attribute)
    {
        return $this ->StatusOptions()[$attribute];

    }



    public function company(){

        return $this -> belongsTo(Company::class);
    }
    public function StatusOptions(){

        return  [
            1 => 'Ordered',
          '2' => 'In-progress',
           '0' => 'Unordered'
        ];
    }
}
