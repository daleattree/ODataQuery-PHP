<?php
/**
 * Created by PhpStorm.
 * User: alexboyce
 * Date: 12/21/14
 * Time: 9:08 PM
 */

namespace ODataQuery\Filter\Operators\Functional\Mathematical;


class ODataFloorOperator extends ODataMathematicalOperator {
    public function __construct($property = NULL) {
        parent::__construct('floor', $property);
    }
}