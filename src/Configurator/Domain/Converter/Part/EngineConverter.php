<?php

namespace Configurator\Domain\Converter\Part;

    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Contract\Logic\PartConverterContract;
    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\ViewModel\Part\PartType;
    use Configurator\Domain\ViewModel\Part\PartView;

    final class EngineConverter implements PartConverterContract
    {
        public static function convertViewToModel(PartView $view): PartContract
        {
            // TODO: Implement convertViewToModel() method.
        }

        /**
         * @param Engine $part
         */
        public static function convertModelToView(PartContract $part): PartView
        {
            $type = PartType::fromPart($part);
            $properties = [
                'horsePower' => $part->horsePower,
                'torque' => $part->torque,
            ];

            return new PartView($part->getId(), $type->value, $properties);
        }
    }
