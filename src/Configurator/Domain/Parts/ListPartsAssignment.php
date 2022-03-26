<?php

namespace Configurator\Domain\Parts;

    use Configurator\Domain\Assignment\AssignmentInterface;
    use Configurator\Domain\Assignment\AssignmentParameters;
    use Configurator\Domain\Assignment\AssignmentParametersNotFoundException;
    use Configurator\Domain\Assignment\AssignmentResponse;
    use Configurator\Domain\Contract\Manager\PartsManagerContract;
    use Configurator\Domain\Model\Brand;

    class ListPartsAssignment implements AssignmentInterface
    {
        public const PARAMS_BRAND = 'brand';

        public function __construct(
            private PartsManagerContract $partsManager
        ) {
        }

        public function execute(AssignmentParameters $parameters): AssignmentResponse
        {
            try {
                $brand = $parameters->get(self::PARAMS_BRAND);
                $parts = $this->partsManager->listAllByBrand(Brand::from($brand));

                return new AssignmentResponse($parts);
            } catch (\ValueError|AssignmentParametersNotFoundException $exception) {
                return new AssignmentResponse($exception->getMessage(), AssignmentResponse::STATUS_ERROR, $exception);
            }
        }
    }
