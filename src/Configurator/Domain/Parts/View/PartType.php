<?php

namespace Configurator\Domain\Parts\View;

    enum PartType: string
    {
        case Cab = 'cab';
        case Frame = 'frame';
        case Gearbox = 'gearbox';
        case Engine = 'engine';
    }
