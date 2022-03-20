<?php

namespace Configurator\Domain\ViewModel\Part;

    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;

    enum PartType : string
    {
        case Cab = 'cab';
        case Frame = 'frame';
        case Gearbox = 'gearbox';
        case Engine = 'engine';
        public static function fromPart(PartContract $part): self
        {
            return match (get_class($part)) {
                Cab::class => self::Cab,
                Frame::class => self::Frame,
                Gearbox::class => self::Gearbox,
                Engine::class => self::Engine,
                default => throw new \LogicException('Invalid part type')
            };
        }
    }
