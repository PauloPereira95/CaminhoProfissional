<?php

namespace App\Modifiers;
use Statamic\Modifiers\Modifier;
class TranslateMonth extends Modifier {
    /**
     * The method to be called when translating the value.
     *
     * @param  mixed  $value  The value to be modified
     * @param  array  $params  Any parameters used in the modifier
     * @return mixed
     */
    public function index ($value, $params) {
        $months = [
            'January' => 'Janeiro',
            'February' => 'Fevereiro',
            'March' => 'Março',
            'April' => 'Abril',
            'May' => 'Maio',
            'June' => 'Junho',
            'July' => 'Julho',
            'August' => 'Agosto',
            'September' => 'Setembro',
            'October' => 'Outubro',
            'November' => 'Novembro',
            'December' => 'Dezembro'
        ];
        return str_replace(array_keys($months),$months , $value);
    }
}
