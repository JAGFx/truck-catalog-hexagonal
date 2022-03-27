<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\FactoryInterface;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\ViewInterface;

    interface PartFactoryInterface extends FactoryInterface
    {
        public function make( ViewInterface $view, bool $save = true ):PartInterface;
    }
