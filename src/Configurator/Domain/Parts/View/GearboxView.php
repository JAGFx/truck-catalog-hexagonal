<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Parts\Gearbox\GearboxType;

    class GearboxView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public PartType $type,
            public Brand $brand,
            public GearboxType $gearboxType,
            public int $torque,
            public int $gears,
            public ?int $crawler,
            public bool $isAutomatic,
            public bool $isManual,
            public bool $hasCrawlerAvailable
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
