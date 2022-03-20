<?php

namespace Configurator\Domain\Converter\Part;

    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Contract\Logic\PartConverterContract;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\ViewModel\Part\PartView;

    final class PartConverter implements PartConverterContract
    {
        public static function convertViewToModel(PartView $view): PartContract
        {
            // TODO: Implement convertViewToModel() method.
        }

        public static function convertModelToView(PartContract $part): PartView
        {
            return match (get_class($part)) {
                Cab::class => CabConverter::convertModelToView($part),
                Engine::class => EngineConverter::convertModelToView($part),
                Frame::class => FrameConverter::convertModelToView($part),
                Gearbox::class => GearboxConverter::convertModelToView($part),
                default => throw new \Exception('Unkown type to convert')
            };
        }
    }
