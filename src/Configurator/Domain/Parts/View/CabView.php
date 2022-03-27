<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Parts\Cab\CabHeight;
    use Configurator\Domain\Model\Parts\Cab\CabLength;

    class CabView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public PartType $type,
            public Brand $brand,
            public CabLength $length,
            public CabHeight $height
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
