<?php

namespace Admin\BabyFootBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminBabyFootBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
