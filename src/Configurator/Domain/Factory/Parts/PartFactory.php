<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Infrastructure\UniqueIdentifierGeneratorContract;
    use Configurator\Domain\Contract\Logic\FactoryExceptionContract;
    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Exception\InvalidPartConsistencyException;
    use Configurator\Domain\Exception\UnableToBuildModelFactoryException;

    final class PartFactory
    {
        public const PART_CAB = 'Cab';
        public const PART_FRAME = 'Frame';
        public const PART_GEARBOX = 'Gearbox';
        public const PART_ENGINE = 'Engine';
    
        public function __construct(
            private UniqueIdentifierGeneratorContract $uniqueIdentifierGenerator
        ) {}
    
    
        /**
         * @throws InvalidPartConsistencyException
         * @throws FactoryExceptionContract
         */
        public function build(string $type, array $data): PartContract
        {
            $uid = $this->uniqueIdentifierGenerator->generate();
            
            $part = match ($type) {
                self::PART_CAB => CabFactoryContract::build($uid, $data),
                self::PART_FRAME => FrameFactoryContract::build($uid, $data),
                self::PART_GEARBOX => GearboxFactoryContract::build($uid, $data),
                self::PART_ENGINE => EngineFactoryContract::build($uid, $data),
                default => throw new UnableToBuildModelFactoryException($type, $data)
            };
            
            $part->validateConsistency();
            
            return $part;
        }
    }
