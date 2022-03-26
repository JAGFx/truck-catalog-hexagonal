<?php

namespace Configurator\Domain\Parts\View;

    class EngineView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public string $type,
            public string $brand,
            public int $horsePower,
            public int $torque
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
