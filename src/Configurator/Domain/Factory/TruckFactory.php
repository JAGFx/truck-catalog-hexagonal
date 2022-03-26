<?php
    
    namespace Configurator\Domain\Factory;
    
    use Configurator\Domain\Contract\UniqueIdentifierGeneratorContract;
    use Configurator\Domain\Exception\UnableToBuildModelFactoryException;
    use Configurator\Domain\Factory\Parts\PartFactory;
    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\Model\Truck;

    final class TruckFactory
    {
        public function __construct(
            private UniqueIdentifierGeneratorContract $uniqueIdentifierGenerator,
            private PartFactory $partFactory
        ) {}
    
        public function build(array $data): Truck
        {
            $parts = $data['parts'] ?? [];
            $brand = Brand::tryFrom( $data['brand'] );
            
            if( is_null( $brand ) )
                throw new UnableToBuildModelFactoryException( Truck::class, $data );
            
            $uid = $this->uniqueIdentifierGenerator->generate();
            
            /** @var Cab $cab */
            $cab = $this->partFactory->build( PartFactory::PART_CAB, $parts );
            
            /** @var Frame $frame */
            $frame = $this->partFactory->build( PartFactory::PART_FRAME, $parts );
            
            /** @var Gearbox $gearbox */
            $gearbox = $this->partFactory->build( PartFactory::PART_GEARBOX, $parts );
            
            /** @var Engine $engine */
            $engine = $this->partFactory->build( PartFactory::PART_ENGINE, $parts );
            
            return new Truck( $uid, $brand, $cab, $frame, $gearbox, $engine );
        }
    }