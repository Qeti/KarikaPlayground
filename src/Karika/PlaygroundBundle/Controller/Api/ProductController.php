<?php

namespace Karika\PlaygroundBundle\Controller\Api;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use Karika\CoreBundle\Controller\Api\ProductController as BaseProductController;

/**
 * Product controller.
 * @RouteResource("Product")
 */
class ProductController extends BaseProductController
{
    /**
     * @inheritdoc
     */
    public function getAction(int $id)
    {
        exit('Overriden');
    }

}