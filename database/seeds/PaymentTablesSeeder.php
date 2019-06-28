<?php

use Illuminate\Database\Seeder;
use App\PaymentForms;
use App\PaymentMethods;

class PaymentTablesSeeder extends Seeder
{
     /**
     * Run the database seedss.
     *
     * @return void
     */
    public function run()
    {
        $this->forms();
        $this->methods();
    }

    /**
     * Seeds Payment Forms Table
     */
    private function forms()
    {
        App\PaymentForm::create(["alias"=>"cash","name"=>"наличные","translit"=>"nalichnyye"]);
        App\PaymentForm::create(["alias"=>"noncash","name"=>"безналичные","translit"=>"beznalichnyye"]);
    }

    /**
     * Seeds Payment Methods Table
     */
    private function methods()
    {
        App\PaymentMethod::create(["alias"=>"prepayment","name"=>"предоплата","translit"=>"predoplata","available"=>"yes"]);
        App\PaymentMethod::create(["alias"=>"upon_shipment","name"=>"по факту отгрузки","translit"=>"po_faktu_otgruzki","available"=>"yes"]);
        App\PaymentMethod::create(["alias"=>"deferment_of_payment","name"=>"отсрочка платежа","translit"=>"otsrochka_platezha","available"=>"yes"]);
    }
}
