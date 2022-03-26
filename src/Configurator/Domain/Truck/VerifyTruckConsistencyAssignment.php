<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    VerifyTruckConsistency.php
 * Date:    26/03/2022
 * Time:    21:43
 */

namespace Configurator\Domain\Truck;

    use Configurator\Domain\Assignment\AssignmentInterface;
    use Configurator\Domain\Assignment\AssignmentParameters;
    use Configurator\Domain\Assignment\AssignmentParametersNotFoundException;
    use Configurator\Domain\Assignment\AssignmentResponse;
    use Configurator\Domain\Model\Truck\Truck;

    class VerifyTruckConsistencyAssignment implements AssignmentInterface
    {
        public const PARAMS_TRUCK = 'truck';

        public function __construct(
            private TruckValidator $truckValidator
        ) {
        }

        public function execute(AssignmentParameters $parameters): AssignmentResponse
        {
            try {
                /** @var Truck $truck */
                $truck = $parameters->get(self::PARAMS_TRUCK);
                $this->truckValidator->validate($truck);

                return new AssignmentResponse('The truck is valid');
            } catch (InvalidTruckConsistencyException $e) {
                return new AssignmentResponse(
                    $e->getMessage()
                );
            } catch (AssignmentParametersNotFoundException $exception) {
                return new AssignmentResponse($exception->getMessage(), AssignmentResponse::STATUS_ERROR, $exception);
            }
        }
    }
