<?php

namespace Configurator\Domain\Converter\Part;

    use Configurator\Domain\Model\Parts\Frame\FrameAxle;
    use Configurator\Domain\ViewModel\Part\FrameAxleView;

    final class FrameAxleConverter
    {
        public static function convertViewToModel(FrameAxleView $view): FrameAxle
        {
            // TODO: Implement convertViewToModel() method.
        }

        public static function convertModelToView(FrameAxle $frameAxle): FrameAxleView
        {
            $mode = $frameAxle->getMode()->value;

            return new FrameAxleView(
                $mode,
                $frameAxle->isLiftable(),
                $frameAxle->isMotorized(),
                $frameAxle->isDirectional(),
                $frameAxle->isSimple()
            );
        }
    }
