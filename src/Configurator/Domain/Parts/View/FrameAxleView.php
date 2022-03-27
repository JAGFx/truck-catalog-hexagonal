<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Parts\Frame\FrameAxleMode;

    class FrameAxleView
    {
        public function __construct(
            public FrameAxleMode $mode,
            public bool $isLiftable,
            public bool $isMotorized,
            public bool $isDirectional,
            public bool $isSimple
        ) {
        }
    }
