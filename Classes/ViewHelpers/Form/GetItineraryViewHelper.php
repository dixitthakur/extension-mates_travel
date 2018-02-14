<?php
declare(strict_types=1);

namespace MT\MatesTravel\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class GetItineraryViewHelper
 */
class GetItineraryViewHelper extends AbstractViewHelper
{
    /**
     * @var array
     */
    protected $itinerary = [
        '0' => 'Fixed',
        '1' => 'Flexible',
        '2' => 'None'

    ];


    /**
     * Build an itinerary array
     *
     * @return array
     */
    public function render():array
    {
        return $this->itinerary;
    }

    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->itinerary[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }
}