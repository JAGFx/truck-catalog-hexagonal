<?php

namespace Configurator\Domain\Truck;

    use Configurator\Domain\Contract\UniqueIdentifierGeneratorContract;
    use Configurator\Domain\FactoryInterface;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\Model\Truck\Truck;
    use Configurator\Domain\Parts\Factory\CabFactory;
    use Configurator\Domain\Parts\Factory\EngineFactory;
    use Configurator\Domain\Parts\Factory\FrameFactory;
    use Configurator\Domain\Parts\Factory\GearboxFactory;
    use Configurator\Domain\ViewInterface;

    class TruckFactory implements FactoryInterface
    {
        public function __construct(
            private UniqueIdentifierGeneratorContract $uniqueIdentifierGenerator,
            private CabFactory $cabFactory,
            private EngineFactory $engineFactory,
            private FrameFactory $frameFactory,
            private GearboxFactory $gearboxFactory
        ) {
        }

        /**
         * @param TruckView $view
         */
        public function make(ViewInterface $view, bool $save = true): Truck
        {
            $id = $this->uniqueIdentifierGenerator->generate();

            /** @var Cab $cab */
            $cab = $this->cabFactory->make($view->cab, $save);

            /** @var Engine $engine */
            $engine = $this->engineFactory->make($view->engine, $save);

            /** @var Frame $frame */
            $frame = $this->frameFactory->make($view, $save);

            /** @var Gearbox $gearbox */
            $gearbox = $this->gearboxFactory->make($view->gearbox, $save);

            return new Truck($id, $view->brand, $cab, $engine, $frame, $gearbox, $view->trimLevel);
        }
    }
