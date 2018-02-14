<?php
/**
 * Created by PhpStorm.
 * User: Dx
 * Date: 1/20/2018
 * Time: 8:56 PM
 */

namespace MT\MatesTravel\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetBudgetViewHelper extends AbstractViewHelper
{

    /**
     * @var array
     */
    protected $budget = [
        '0' => '0 - 150',
        '1' => '150 - 500',
        '2' => '500 - 1000',
        '3' => '1000 - 1500',
        '4' => '1500 - 2000',
        '5' => '2000+'
    ];

    /**
     * Build an budget array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->budget;
    }

    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->budget[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }
}
