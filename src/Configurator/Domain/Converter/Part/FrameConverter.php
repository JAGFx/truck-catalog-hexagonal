<?php
    
    namespace Configurator\Domain\Converter\Part;
    
    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Contract\Logic\PartConverterContract;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\ViewModel\Part\PartType;
    use Configurator\Domain\ViewModel\Part\PartView;

    final class FrameConverter implements PartConverterContract
    {
    
        public static  function convertViewToModel(PartView $view): PartContract
        {
            // TODO: Implement convertViewToModel() method.
        }
    
        /**
         * @param Frame $part
         */
        public static  function convertModelToView(PartContract $part): PartView
        {
            $type = PartType::fromPart( $part );
            $properties = [
                'type' => $part->getType()->value,
                'isATractor' => $part->isATractor(),
                'isStraight' => $part->isATractor(),
                'axles' => array_map(
                    fn( $axle ) => FrameAxleConverter::convertModelToView( $axle ),
                    $part->getAxles()
                )
            ];
    
            return new PartView($part->getId(), $type->value, $properties);
        }
    }