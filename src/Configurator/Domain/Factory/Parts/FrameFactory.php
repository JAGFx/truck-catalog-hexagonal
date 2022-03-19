<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Factory\PartFactory;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Frame\FrameType;

    final class FrameFactory implements PartFactory
    {
        public static function create(array $data): Frame
        {
            $axlesData = $data['axles'] ?? [];
            $axles = [];
            $type = FrameType::tryFrom($data['type']);
            $hasMotorizedAxle = false;
            $hasDirectionAxle = false;

            if (is_null($type)) {
                throw new \Exception('Invalid type');
            }

            foreach ($axlesData as $axlesDatum) {
                $axle = FrameAxleFactory::create($axlesDatum);

                if (!$hasMotorizedAxle && $axle->isMotorized()) {
                    $hasMotorizedAxle = true;
                }

                if (!$hasDirectionAxle && $axle->isDirectional()) {
                    $hasDirectionAxle = true;
                }

                $axles[] = $axle;
            }

            $numberOfAxles = count($axles);

            if ($numberOfAxles < Frame::AXLES_COUNT_MINIMAL) {
                throw new \Exception('Unsuffisant axles');
            }

            if ($numberOfAxles > Frame::AXLES_COUNT_MAXIMAL) {
                throw new \Exception('Too much axles');
            }

            if (!$hasDirectionAxle) {
                throw new \Exception('No directional axle');
            }

            if (!$hasMotorizedAxle) {
                throw new \Exception('No motorized axle');
            }

            return new Frame($type, $axles);
        }
    }
