<?php

namespace PlaygroundCoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlaygroundCoreBundle extends Bundle
{
    public function getParent()
    {
        return 'KarikaCoreBundle';
    }
}