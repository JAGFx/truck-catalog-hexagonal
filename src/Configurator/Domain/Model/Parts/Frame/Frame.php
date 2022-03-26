<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Framz.php
 * Date:    19/03/2022
 * Time:    21:08
 */

namespace Configurator\Domain\Model\Parts\Frame;

    use Configurator\Domain\Model\Parts\Part;

    final class Frame extends Part
    {
        public const AXLES_COUNT_MINIMAL = 2;
        public const AXLES_COUNT_MAXIMAL = 4;

        public function __construct(
            private string $id,
            private FrameType $type,
            /** @var FrameAxle[] */
            private array $axles
        ) {
        }

        public function getId(): string
        {
            return $this->id;
        }

        public function getType(): FrameType
        {
            return $this->type;
        }

        public function isATractor(): bool
        {
            return $this->getType() === FrameType::Tractor;
        }

        public function isStraight(): bool
        {
            return $this->getType() === FrameType::Straight;
        }

        public function getAxles(): array
        {
            return $this->axles;
        }
        
        public function hasMotorizedAxle(): bool {
            /** @var FrameAxle $axle */
            foreach ($this->axles as $axle) {
                if( $axle->isMotorized() )
                    return true;
            }
            
            return false;
        }
        
        public function hasDirectionalAxle(): bool {
            /** @var FrameAxle $axle */
            foreach ($this->axles as $axle) {
                if( $axle->isDirectional() )
                    return true;
            }
    
            return false;
        }
    }
