<?php
/**
 * Created by PhpStorm.
 * User: Dx
 * Date: 1/19/2018
 * Time: 3=>51 PM
 */

namespace MT\MatesTravel\ViewHelpers\Form;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetModeViewHelper extends AbstractViewHelper
{

    /**
     * @var array
     */
    protected $transportation = [
        '0' => 'Bicycle',
        '1' => 'Boat',
        '2' =>  'Bus',
        '3' => 'Car',
        '4' => 'Cruise',
        '5' => 'Hiking',
        '6' => 'Hitchhiking',
        '7' => 'Motorcycle',
        '8' => 'Plane',
        '9' => 'Train',
        '10' => 'Other'
    ];

    /**
     * Build an accommodation array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->transportation;
    }
    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->transportation[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }

}