<?php

namespace Configurator\Domain\Converter\Part;

    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Contract\Logic\PartConverterContract;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\ViewModel\Part\PartType;
    use Configurator\Domain\ViewModel\Part\PartView;

    final class GearboxConverter implements PartConverterContract
    {
        public static function convertViewToModel(PartView $view): PartContract
        {
            // TODO: Implement convertViewToModel() method.
        }

        /**
         * @param Gearbox $part
         */
        public static function convertModelToView(PartContract $part): PartView
        {
            $type = PartType::fromPart($part);
            $properties = [
                'type' => $part->getType()->value,
                'torque' => $part->getTorque(),
                'gears' => $part->getGears(),
                'crawler' => $part->getCrawler(),
                'isAutomatic' => $part->isAutomatic(),
                'isManual' => $part->isManual(),
                'hasCrawlerAvailable' => $part->hasCrawlerAvailable(),
            ];

            return new PartView($part->getId(), $type->value, $properties);
        }
    }
