<?php
/**
 * Created by PhpStorm.
 * User: Dx
 * Date: 1/19/2018
 * Time: 3:30 PM
 */

declare(strict_types=1);
namespace MT\MatesTravel\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class GetAccommodationViewHelper
 */
class GetAccommodationViewHelper extends AbstractViewHelper
{

    /**
     * @var array
     */
    protected $accommodation = [
        '0' => 'Campside',
        '1' => 'Couchsurfing',
        '2' => 'Homestay',
        '3' => 'Hostels',
        '4' => 'Hotels',
        '5' => 'Others'
    ];

    /**
     * Build an accommodation array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->accommodation;
    }

    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
           $value = $this->accommodation[$key];
           array_push($valueArray,$value);
        }
        return $valueArray;
    }
}
