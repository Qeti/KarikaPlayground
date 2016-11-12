<?php

namespace Karika\PlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Karika\ExtraPlaygroundBundle\Entity\ProductSuperclass as BaseProduct;

/**
 * Product
 *
 * @ORM\Entity(repositoryClass="Karika\PlaygroundBundle\Repository\ProductRepository")
 */
class Product extends BaseProduct
{

}
