<?php
/**
 * Created by PhpStorm.
 * User: Dx
 * Date: 1/20/2018
 * Time: 9:24 PM
 */

namespace MT\MatesTravel\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
class GetTypeOfTravelViewHelper extends AbstractViewHelper
{

    /**
     * @var array
     */
    protected $typeOfTravel = [
        '0' => 'Backpacking',
        '1' =>  'Beach',
        '2' => 'Country Side',
        '3' => 'Others'

    ];

    /**
     * Build an accommodation array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->typeOfTravel;
    }

    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->typeOfTravel[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }
}
