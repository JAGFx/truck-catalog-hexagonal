<?php
    
    namespace Configurator\Domain\Truck;
    
    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Truck\TruckTrimLevel;
    use Configurator\Domain\Parts\View\CabView;
    use Configurator\Domain\Parts\View\EngineView;
    use Configurator\Domain\Parts\View\FrameView;
    use Configurator\Domain\Parts\View\GearboxView;
    use Configurator\Domain\ViewInterface;

    class TruckView implements ViewInterface
    {
        public function __construct(
            public string $id,
            public Brand $brand,
            public CabView $cab,
            public EngineView $engine,
            public FrameView $frame,
            public GearboxView $gearbox,
            public TruckTrimLevel $trimLevel
        ) {}
    }