<?php

namespace Karika\PlaygroundBundle\Controller\Api;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use Karika\PlaygroundBundle\Entity\Account;
use Karika\CoreBundle\Controller\Api\ApiController;

/**
 * Account controller.
 * @RouteResource("Account")
 */
class AccountController extends ApiController
{
    protected function entityClassName(): string
    {
        return Account::class;
    }
}
