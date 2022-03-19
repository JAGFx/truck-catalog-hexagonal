<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Model\PartInterface;

    final class PartFactory
    {
        public const PART_CAB = 'Cab';
        public const PART_FRAME = 'Frame';
        public const PART_GEARBOX = 'Gearbox';
        public const PART_ENGINE = 'Engine';

        public static function create(string $type, array $data): PartInterface
        {
            return match ($type) {
                self::PART_CAB => CabFactory::create($data),
                self::PART_FRAME => FrameFactory::create($data),
                self::PART_GEARBOX => GearboxFactory::create($data),
                self::PART_ENGINE => EngineFactory::create($data),
                default => throw new \Exception('Unknown part')
            };
        }
    }
