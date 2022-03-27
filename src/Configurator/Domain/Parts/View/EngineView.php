<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;

    class EngineView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public PartType $type,
            public Brand $brand,
            public int $horsePower,
            public int $torque
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
