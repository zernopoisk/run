<?php

use Illuminate\Database\Seeder;
use App\LocationRegion;

class LocationTablesSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->Vinnitskaya();
        $this->Odesskaya();
        $this->Poltavskaya();
        $this->Rovenskaya();
        $this->Sumskaya();
        $this->Ternopolskaya();
        $this->Kharkovskaya();
        $this->Khersonskaya();
        $this->Khmelnitskaya();
        $this->Cherkasskaya();
        $this->Chernigovskaya();
        $this->Nikolayevskaya();
        $this->Lvovskaya();
        $this->Luganskaya();
        $this->Volynskaya();
        $this->Dnepropetrovskaya();
        $this->Donetskaya();
        $this->Zhitomirskaya();
        $this->Zakarpatskaya();
        $this->Zaporozhskaya();
        $this->IvanoFrankovskaya();
        $this->Kiyevskaya();
        $this->Kirovogradskaya();
        $this->Chernovitskaya();
        $this->Kiyev();
    }

    /**
     * Vinnitskaya
     */
    private function Vinnitskaya()
    {
        $Vinnitskaya = App\LocationRegion::create(["alias"=>"Vinnytsia","name"=>"Винницкая","translit"=>"Vinnitskaya","type"=>"region","available"=>"yes"]);
        $Vinnitskaya->adminCenter()->create(["alias"=>"Vinnitsa","name"=>"Винница","translit"=>"Vinnitsa"]);
    }

    /**
     * Odesskaya
     */
    private function Odesskaya()
    {
        $Odesskaya = App\LocationRegion::create(["alias"=>"Odessa","name"=>"Одесская","translit"=>"Odesskaya","type"=>"region","available"=>"yes"]);
        $Odesskaya->adminCenter()->create(["alias"=>"Odessa","name"=>"Одесса","translit"=>"Odessa"]);
    }

    /**
     * Poltavskaya
     */
    private function Poltavskaya()
    {
        $Poltavskaya = App\LocationRegion::create(["alias"=>"Poltava","name"=>"Полтавская","translit"=>"Poltavskaya","type"=>"region","available"=>"yes"]);
        $Poltavskaya->adminCenter()->create(["alias"=>"Poltava","name"=>"Полтава","translit"=>"Poltava"]);
    }

    /**
     * Rovenskaya
     */
    private function Rovenskaya()
    {
        $Rovenskaya = App\LocationRegion::create(["alias"=>"Rivne","name"=>"Ровенская","translit"=>"Rovenskaya","type"=>"region","available"=>"yes"]);
        $Rovenskaya->adminCenter()->create(["alias"=>"Rovno","name"=>"Ровно","translit"=>"Rovno"]);
    }

    /**
     * Sumskaya
     */
    private function Sumskaya()
    {
        $Sumskaya = App\LocationRegion::create(["alias"=>"Sumy","name"=>"Сумская","translit"=>"Sumskaya","type"=>"region","available"=>"yes"]);
        $Sumskaya->adminCenter()->create(["alias"=>"Sumy","name"=>"Сумы","translit"=>"Sumy"]);
    }

    /**
     * Ternopolskaya
     */
    private function Ternopolskaya()
    {
        $Ternopolskaya = App\LocationRegion::create(["alias"=>"Ternopil","name"=>"Тернопольская","translit"=>"Ternopolskaya","type"=>"region","available"=>"yes"]);
        $Ternopolskaya->adminCenter()->create(["alias"=>"Ternopil","name"=>"Тернополь","translit"=>"Ternopol"]);
    }

    /**
     * Kharkovskaya
     */
    private function Kharkovskaya()
    {
        $Kharkovskaya = App\LocationRegion::create(["alias"=>"Kharkivska","name"=>"Харьковская","translit"=>"Kharkovskaya","type"=>"region","available"=>"yes"]);
        $Kharkovskaya->adminCenter()->create(["alias"=>"Kharkiv","name"=>"Харьков","translit"=>"Kharkov"]);
    }

    /**
     * Khersonskaya
     */
    private function Khersonskaya()
    {
        $Khersonskaya = App\LocationRegion::create(["alias"=>"Kherson","name"=>"Херсонская","translit"=>"Khersonskaya","type"=>"region","available"=>"yes"]);
        $Khersonskaya->adminCenter()->create(["alias"=>"Kherson","name"=>"Херсон","translit"=>"Kherson"]);
    }

    /**
     * Khmelnitskaya
     */
    private function Khmelnitskaya()
    {
        $Khmelnitskaya = App\LocationRegion::create(["alias"=>"Khmelnytskyi","name"=>"Хмельницкая","translit"=>"Khmelnitskaya","type"=>"region","available"=>"yes"]);
        $Khmelnitskaya->adminCenter()->create(["alias"=>"Khmelnytskyi","name"=>"Хмельницкий","translit"=>"Khmelnitskiy"]);
    }

    /**
     * Cherkasskaya
     */
    private function Cherkasskaya()
    {
        $Cherkasskaya = App\LocationRegion::create(["alias"=>"Cherkasy","name"=>"Черкасская","translit"=>"Cherkasskaya","type"=>"region","available"=>"yes"]);
        $Cherkasskaya->adminCenter()->create(["alias"=>"Cherkassy","name"=>"Черкассы","translit"=>"Cherkassy"]);
    }

    /**
     * Chernigovskaya
     */
    private function Chernigovskaya()
    {
        $Chernigovskaya = App\LocationRegion::create(["alias"=>"Chernihiv","name"=>"Черниговская","translit"=>"Chernigovskaya","type"=>"region","available"=>"yes"]);
        $Chernigovskaya->adminCenter()->create(["alias"=>"Chernigov","name"=>"Чернигов","translit"=>"Chernigov"]);
    }

    /**
     * Nikolayevskaya
     */
    private function Nikolayevskaya()
    {
        $Nikolayevskaya = App\LocationRegion::create(["alias"=>"Mykolayiv","name"=>"Николаевская","translit"=>"Nikolayevskaya","type"=>"region","available"=>"yes"]);
        $Nikolayevskaya->adminCenter()->create(["alias"=>"Mykolaiv","name"=>"Николаев","translit"=>"Nikolayev"]);
    }

    /**
     * Lvovskaya
     */
    private function Lvovskaya()
    {
        $Lvovskaya = App\LocationRegion::create(["alias"=>"Lviv","name"=>"Львовская","translit"=>"Lvovskaya","type"=>"region","available"=>"yes"]);
        $Lvovskaya->adminCenter()->create(["alias"=>"Lviv","name"=>"Львов","translit"=>"Lvov"]);
    }

    /**
     * Luganskaya
     */
    private function Luganskaya()
    {
        $Luganskaya = App\LocationRegion::create(["alias"=>"Luhansk","name"=>"Луганская","translit"=>"Luganskaya","type"=>"region","available"=>"yes"]);
        $Luganskaya->adminCenter()->create(["alias"=>"Severodonetsk","name"=>"Северодонецк","translit"=>"Severodonetsk"]);
    }

    /**
     * Volynskaya
     */
    private function Volynskaya()
    {
        $Volynskaya = App\LocationRegion::create(["alias"=>"Volynska","name"=>"Волынская","translit"=>"Volynskaya","type"=>"region","available"=>"yes"]);
        $Volynskaya->adminCenter()->create(["alias"=>"Lutsk","name"=>"Луцк","translit"=>"Lutsk"]);
    }

    /**
     * Dnepropetrovskaya
     */
    private function Dnepropetrovskaya()
    {
        $Dnepropetrovskaya = App\LocationRegion::create(["alias"=>"Dnepropetrovsk","name"=>"Днепропетровская","translit"=>"Dnepropetrovskaya","type"=>"region","available"=>"yes"]);
        $Dnepropetrovskaya->adminCenter()->create(["alias"=>"Dnieper","name"=>"Днепр","translit"=>"Dnepr"]);
    }

    /**
     * Donetskaya
     */
    private function Donetskaya()
    {
        $Donetskaya = App\LocationRegion::create(["alias"=>"Donetsk","name"=>"Донецкая","translit"=>"Donetskaya","type"=>"region","available"=>"yes"]);
        $Donetskaya->adminCenter()->create(["alias"=>"Donetsk","name"=>"Донецк","translit"=>"Donetsk"]);
    }

    /**
     * Zhitomirskaya
     */
    private function Zhitomirskaya()
    {
        $Zhitomirskaya = App\LocationRegion::create(["alias"=>"Zhitomirskaya","name"=>"Житомирская","translit"=>"Zhitomirskaya","type"=>"region","available"=>"yes"]);
        $Zhitomirskaya->adminCenter()->create(["alias"=>"Zhitomir","name"=>"Житомир","translit"=>"Zhitomir"]);
    }

    /**
     * Zakarpatskaya
     */
    private function Zakarpatskaya()
    {
        $Zakarpatskaya = App\LocationRegion::create(["alias"=>"Transcarpathian","name"=>"Закарпатская","translit"=>"Zakarpatskaya","type"=>"region","available"=>"yes"]);
        $Zakarpatskaya->adminCenter()->create(["alias"=>"Uzhhorod","name"=>"Ужгород","translit"=>"Uzhgorod"]);
    }

    /**
     * Zaporozhskaya
     */
    private function Zaporozhskaya()
    {
        $Zaporozhskaya = App\LocationRegion::create(["alias"=>"Zaporozhye","name"=>"Запорожская","translit"=>"Zaporozhskaya","type"=>"region","available"=>"yes"]);
        $Zaporozhskaya->adminCenter()->create(["alias"=>"Zaporozhye","name"=>"Запорожье","translit"=>"Zaporozhye"]);
    }

    /**
     * IvanoFrankovskaya
     */
    private function IvanoFrankovskaya()
    {
        $IvanoFrankovskaya = App\LocationRegion::create(["alias"=>"Ivano-Frankivsk","name"=>"Ивано-Франковская","translit"=>"Ivano-Frankovskaya","type"=>"region","available"=>"yes"]);
        $IvanoFrankovskaya->adminCenter()->create(["alias"=>"Ivano-Frankivsk","name"=>"Ивано-Франковск","translit"=>"Ivano-Frankovsk"]);
    }

    /**
     * Kiyevskaya
     */
    private function Kiyevskaya()
    {
        $Kiyevskaya = App\LocationRegion::create(["alias"=>"Kievskaya","name"=>"Киевская","translit"=>"Kiyevskaya","type"=>"region","available"=>"yes"]);
        $Kiyevskaya->adminCenter()->create(["alias"=>"Kiev","name"=>"Киев","translit"=>"Kiyev"]);
    }

    /**
     * Kirovogradskaya
     */
    private function Kirovogradskaya()
    {
        $Kirovogradskaya = App\LocationRegion::create(["alias"=>"Kirovograd","name"=>"Кировоградская","translit"=>"Kirovogradskaya","type"=>"region","available"=>"yes"]);
        $Kirovogradskaya->adminCenter()->create(["alias"=>"Kropiwnicki","name"=>"Кропивницкий","translit"=>"Kropivnitskiy"]);
    }

    /**
     * Chernovitskaya
     */
    private function Chernovitskaya()
    {
        $Chernovitskaya = App\LocationRegion::create(["alias"=>"Chernivtsi","name"=>"Черновицкая","translit"=>"Chernovitskaya","type"=>"region","available"=>"yes"]);
        $Chernovitskaya->adminCenter()->create(["alias"=>"Chernivtsi","name"=>"Черновцы","translit"=>"Chernovtsy"]);
    }

    /**
     * Kiyev
     */
    private function Kiyev()
    {
        $Kiyev = App\LocationRegion::create(["alias"=>"Kiev","name"=>"Киев","translit"=>"Kiyev","type"=>"city","available"=>"yes"]);
    }

}
