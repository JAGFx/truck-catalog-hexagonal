<?php

namespace Configurator\Domain\Parts\Validator;

    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\ValidatorInterface;

    class FrameValidator implements ValidatorInterface
    {
        /**
         * @param Frame $model
         *
         * @throws InvalidPartConsistencyException
         */
        public function validate(mixed $model): void
        {
            $hasMotorizedAxle = false;
            $hasDirectionAxle = false;

            foreach ($model->getAxles() as $axle) {
                if (!$hasMotorizedAxle && $axle->isMotorized()) {
                    $hasMotorizedAxle = true;
                }

                if (!$hasDirectionAxle && $axle->isDirectional()) {
                    $hasDirectionAxle = true;
                }
            }

            $numberOfAxles = count($model->getAxles());

            if ($numberOfAxles < Frame::AXLES_COUNT_MINIMAL) {
                throw new InvalidPartConsistencyException('Unsuffisant axles', $model);
            }

            if ($numberOfAxles > Frame::AXLES_COUNT_MAXIMAL) {
                throw new InvalidPartConsistencyException('Too much axles', $model);
            }

            if (!$hasDirectionAxle) {
                throw new InvalidPartConsistencyException('No directional axle', $model);
            }

            if (!$hasMotorizedAxle) {
                throw new InvalidPartConsistencyException('No motorized axle', $model);
            }
        }
    }
