<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxSizeDetectController extends Controller
{
    /**
     * Incoterms-2010
     */
    public function incoterms()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.incoterms.incoterms'),
                ['group','alias','abbr','term_en','specification','type_of_transport','available']
            ), "Incoterms-2010"
        );
    }

    /**
     * Incoterms-2010 Groups
     */
    public function incotermsGroups()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.incoterms.groups'),
                ['alias','name','term_en','specification','available']
            ), "Incoterms-2010 Groups"
        );
    }

    /**
     * Payment Methods
     */
    public function paymentMethods()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.payment.methods'),
                ['alias','name','translit']
            ), "Payment Methods"
        );
    }

    /**
     * Payment Forms
     */
    public function paymentForms()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.payment.forms'),
                ['alias','name','translit']
            ), "Payment Forms"
        );
    }

    /**
     * Crops
     */
    public function crops()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.crops.crops'),
                ['alias','name','translit']
            ), "Crops"
        );
    }

    /**
     * Crops Categories
     */
    public function cropsCategories()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('json.crops.categories'),
                ['alias','name','translit']
            ), "Crops Categories"
        );
    }

    /**
     * Display max values for the specified array.
     */
    private function _displayMaxValues(array $mv, $entityName)
    {
        if (count ($mv) > 0) {
            echo sprintf("<h3>%s</h3>", $entityName);
            foreach ($mv as $key => $val) {
                echo sprintf('%s - <span style="color:red;">%d</span><br>', $key, $val);
            }
        } else {
            echo sprintf('<span style="color:red;">%s</span>', "There is no results found for the specified array.");
        }
    }

    /**
     * Calculates maximum value for array elements.
     * Necessary to create fields of appropriate length in database tables.
     */
    private function _calculateMaxValues(array $a, array $attributes)
    {
        $length = [];
        
        if (count ($a) > 0) {
            // Prepare elements to calculate maximum values.
            foreach ($a as $item) {
                foreach ($item as $key => $value) {
                    if (in_array($key, $attributes, true)) {
                        $length[$key][] = mb_strlen($value);
                    }
                }
            }
        }
        
        if (count ($length) > 0) {
            // Search max value for each element.
            foreach ($length as $key => $values) {
                $length[$key] = max($values);
            }
        }

        return $length;
    }

}
