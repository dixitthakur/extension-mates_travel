<?php
/**
 * Created by PhpStorm.
 * User: Dx
 * Date: 1/20/2018
 * Time: 9:19 PM
 */

namespace MT\MatesTravel\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
class GetPurposeOfTravelViewHelper extends AbstractViewHelper
{

    /**
     * @var array
     */
    protected $purposeOfTravel = [
        '0' => 'Work',
        '1' => 'Travel'
    ];

    /**
     * Build an accommodation array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->purposeOfTravel;
    }

    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->purposeOfTravel[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }
}