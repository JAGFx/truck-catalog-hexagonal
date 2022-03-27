<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\Contract\Manager\PartsManagerContract;
    use Configurator\Domain\Contract\UniqueIdentifierGeneratorContract;
    use Configurator\Domain\Model\Parts\PartInterface;

    abstract class PartFactory implements PartFactoryInterface
    {
        public function __construct(
            protected UniqueIdentifierGeneratorContract $uniqueIdentifierGenerator,
            protected PartsManagerContract $partsManager
        ) {}
        
        protected function save( PartInterface $part ): PartInterface{
            $this->partsManager->save( $part );
            
            return $part;
        }
    }
