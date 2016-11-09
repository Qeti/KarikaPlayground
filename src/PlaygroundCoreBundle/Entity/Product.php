<?php

namespace PlaygroundCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Karika\CoreBundle\Entity\ProductSuperclass as BaseProduct;

/**
 * Product
 *
 * @ORM\Entity(repositoryClass="Karika\CoreBundle\Repository\ProductRepository")
 */
class Product extends BaseProduct
{

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    protected $comment;

    function getComment()
    {
        return $this->comment;
    }

    function setComment($comment)
    {
        $this->comment = $comment;
    }



}
