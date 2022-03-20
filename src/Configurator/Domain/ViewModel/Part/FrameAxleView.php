<?php

namespace Configurator\Domain\ViewModel\Part;

    final class FrameAxleView
    {
        public function __construct(
            public string $mode,
            public bool $liftable,
            public bool $motorized,
            public bool $directional,
            public bool $simple
        ) {
        }
    }
