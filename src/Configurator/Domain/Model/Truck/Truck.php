<?php
    
    namespace Configurator\Domain\Model\Truck;
    
    use Configurator\Domain\Model\Brand;
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
            private Engine $engine,
            private TruckTrimLevel $trimLevel
        ) {}
    
        public function getId(): string
        {
            return $this->id;
        }
    
        public function getBrand(): Brand
        {
            return $this->brand;
        }
    
        public function setBrand(Brand $brand): void
        {
            $this->brand = $brand;
        }
    
        public function getCab(): Cab
        {
            return $this->cab;
        }
    
        public function setCab(Cab $cab): void
        {
            $this->cab = $cab;
        }
    
        public function getFrame(): Frame
        {
            return $this->frame;
        }
    
        public function setFrame(Frame $frame): void
        {
            $this->frame = $frame;
        }
    
        public function getGearbox(): Gearbox
        {
            return $this->gearbox;
        }
    
        public function setGearbox(Gearbox $gearbox): void
        {
            $this->gearbox = $gearbox;
        }
    
        public function getEngine(): Engine
        {
            return $this->engine;
        }
    
        public function setEngine(Engine $engine): void
        {
            $this->engine = $engine;
        }
    
        public function getTrimLevel(): TruckTrimLevel
        {
            return $this->trimLevel;
        }
    
        public function setTrimLevel(TruckTrimLevel $trimLevel): void
        {
            $this->trimLevel = $trimLevel;
        }
    }