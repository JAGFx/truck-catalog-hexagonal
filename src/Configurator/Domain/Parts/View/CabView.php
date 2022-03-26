<?php

namespace Configurator\Domain\Parts\View;

    class CabView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public string $type,
            public string $brand,
            public string $length,
            public string $height
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
