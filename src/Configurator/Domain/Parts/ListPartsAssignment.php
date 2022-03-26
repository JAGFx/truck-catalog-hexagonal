<?php
    
    namespace Configurator\Domain\Parts;
    
    use Configurator\Domain\AssignmentInterface;
    use Configurator\Domain\AssignmentResponse;
    use Configurator\Domain\Contract\Manager\PartsManagerContract;
    use Configurator\Domain\Model\Brand;

    class ListPartsAssignment implements AssignmentInterface
    {
        public function __construct(
            private PartsManagerContract $partsManager
        ) {}
    
        public function execute(array $data): AssignmentResponse
        {
           try {
               $parts = $this->partsManager->listAllByBrand(Brand::from( $data['brand'] ));
    
               return new AssignmentResponse( $parts );
               
           } catch (\ValueError $valueError) {
               return new AssignmentResponse( $valueError->getMessage(), AssignmentResponse::STATUS_ERROR, $valueError );
           }
        }
    }
