<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\PartViewInterface;

    interface PartFactoryInterface
    {
        public function make( PartViewInterface $partView, bool $save = true ):PartInterface;
    }
