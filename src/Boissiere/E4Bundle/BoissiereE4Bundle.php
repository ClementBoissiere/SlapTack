<?php

namespace Boissiere\E4Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoissiereE4Bundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
