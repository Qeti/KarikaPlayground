<?php

namespace Karika\PlaygroundBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Karika\CoreBundle\Controller\ProductRESTController as BaseProductRESTController;

/**
 * Product controller.
 * @RouteResource("Product")
 */
class ProductRESTController extends BaseProductRESTController
{
    /**
     * @inheritdoc
     */
    public function getAction(int $id)
    {
        exit('Overriden');
    }

}