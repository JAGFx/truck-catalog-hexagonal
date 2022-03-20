<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Framz.php
 * Date:    19/03/2022
 * Time:    21:08
 */

namespace Configurator\Domain\Model\Parts\Frame;

    use Configurator\Domain\Exception\InvalidPartConsistencyException;
    use Configurator\Domain\Model\Parts\Part;

    final class Frame extends Part
    {
        public const AXLES_COUNT_MINIMAL = 2;
        public const AXLES_COUNT_MAXIMAL = 4;

        public function __construct(
            private string $id,
            private FrameType $type,
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

        public function validateConsistency(): void
        {
            $hasMotorizedAxle = false;
            $hasDirectionAxle = false;

            foreach ($this->getAxles() as $axle) {
                if (!$hasMotorizedAxle && $axle->isMotorized()) {
                    $hasMotorizedAxle = true;
                }

                if (!$hasDirectionAxle && $axle->isDirectional()) {
                    $hasDirectionAxle = true;
                }
            }

            $numberOfAxles = count($this->getAxles());

            if ($numberOfAxles < Frame::AXLES_COUNT_MINIMAL) {
                throw new InvalidPartConsistencyException('Unsuffisant axles', $this);
            }

            if ($numberOfAxles > Frame::AXLES_COUNT_MAXIMAL) {
                throw new InvalidPartConsistencyException('Too much axles', $this);
            }

            if (!$hasDirectionAxle) {
                throw new InvalidPartConsistencyException('No directional axle', $this);
            }

            if (!$hasMotorizedAxle) {
                throw new InvalidPartConsistencyException('No motorized axle', $this);
            }
        }
    }
