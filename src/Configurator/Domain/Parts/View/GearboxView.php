<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Parts\Gearbox\GearboxType;

    class GearboxView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public string $type,
            public string $brand,
            public int $gearboxType,
            public int $torque,
            public int $gears,
            public ?int $crawler,
        ) {
            parent::__construct($id, $type, $brand);
        }

        public function isAutomatic(): bool
        {
            return $this->type === GearboxType::Automatic->value;
        }

        public function isManual(): bool
        {
            return $this->type === GearboxType::Manual->value;
        }

        public function hasCrawlerAvailable(): bool
        {
            return !is_null($this->crawler);
        }
    }
