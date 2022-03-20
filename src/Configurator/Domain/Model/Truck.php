<?php
    
    namespace Configurator\Domain\Model;
    
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;

    final class Truck
    {
        public function __construct(
            private string $id,
            private Brand $brand,
            private Cab $cab,
            private Frame $frame,
            private Gearbox $gearbox,
            private Engine $engine
        ) {}
    }