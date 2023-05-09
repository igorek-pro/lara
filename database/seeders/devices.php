<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class devices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$data = [];
        $data = [
            'device_id' =>111,
            'fingerprint' =>'7FCB-65E3-3A7B-C75A-B444-EDBE-01A6-55F8',
            'active'=>true,
    ];
       $id = DB::table('devices')->insertGetId($data);
       $data = [];
       $vals = [
        'disabled'=>'0',
        'wedding_enabled'=>'1',
        'wedding_price'=>'200',
        'talisman_enabled'=>'1',
        'talisman_price'=>'200',
        'kinoselfie_enabled'=>'1',
        'kinoselfie_price'=>'100',
        'reprint_price'=>'50',
        'print_enabled'=>'1',
        'print_price'=>'0-100;',
        'validator_enabled'=>'1',
        'cashless_enabled'=>'1',
        'error_mail'=>'ya.detskin@yandex.ru',
        'bcc_mail'=>'zagskrd@mail.ru',
        'fiscal_key'=>'c2362b3fa4c6eb1d',
        'address'=>'ул. Володи Головатого, 313, Краснодар, Краснодарский край',
    ];
       foreach($vals as $key => $value){
           $data[]=[
             'device_id'=>$id,
             'key'=>$key,
             'value'=>$value,
           ];
       }
        DB::table('device_settings')->insert($data);
    }
}
