<?php

use BladeUI\Icons\Generation\IconGenerator;
use BladeUI\Icons\Generation\IconSetConfig;

return IconGenerator::create('blade-heroicons')
    ->fromNPM('heroicons')
    ->directory('/')
    ->withIconSets([
        IconSetConfig::create('outline')
            ->setOutputFilePrefix('o-'),
        IconSetConfig::create('solid')
            ->setOutputFilePrefix('s-'),
    ])
    ->useSingleIconSet();
