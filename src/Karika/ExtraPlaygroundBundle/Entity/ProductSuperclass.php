<?php

namespace Karika\ExtraPlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Karika\CoreBundle\Entity\ProductSuperclass as BaseProduct;

class ProductSuperclass extends BaseProduct
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