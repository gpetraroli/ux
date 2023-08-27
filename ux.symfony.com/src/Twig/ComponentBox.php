<?php

namespace App\Twig;

use App\Model\Package;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent()]
class ComponentBox
{
    public Package $package;
}
