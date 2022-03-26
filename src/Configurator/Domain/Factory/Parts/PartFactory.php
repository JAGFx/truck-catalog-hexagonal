<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\UniqueIdentifierGeneratorContract;
    use Configurator\Domain\Exception\UnableToBuildModelFactoryException;
    use Configurator\Domain\FactoryExceptionInterface;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\Validator\InvalidPartConsistencyException;

    final class PartFactory
    {
        public const PART_CAB = 'Cab';
        public const PART_FRAME = 'Frame';
        public const PART_GEARBOX = 'Gearbox';
        public const PART_ENGINE = 'Engine';

        public function __construct(
            private UniqueIdentifierGeneratorContract $uniqueIdentifierGenerator
        ) {
        }

        /**
         * @throws InvalidPartConsistencyException
         * @throws FactoryExceptionInterface
         */
        public function build(string $type, array $data): PartInterface
        {
            $uid = $this->uniqueIdentifierGenerator->generate();

            $part = match ($type) {
                self::PART_CAB => CabFactoryInterface::build($uid, $data),
                self::PART_FRAME => FrameFactoryInterface::build($uid, $data),
                self::PART_GEARBOX => GearboxFactoryInterface::build($uid, $data),
                self::PART_ENGINE => EngineFactoryInterface::build($uid, $data),
                default => throw new UnableToBuildModelFactoryException($type, $data)
            };

//            $part->validateConsistency();

            return $part;
        }
    }
