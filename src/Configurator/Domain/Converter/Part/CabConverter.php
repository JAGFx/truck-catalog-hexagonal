<?php
    
    namespace Configurator\Domain\Converter\Part;
    
    use Configurator\Domain\Contract\Logic\PartContract;
    use Configurator\Domain\Contract\Logic\PartConverterContract;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\ViewModel\Part\PartType;
    use Configurator\Domain\ViewModel\Part\PartView;

    final  class CabConverter implements PartConverterContract
    {
    
        public static function convertViewToModel(PartView $view): PartContract
        {
            // TODO: Implement convertViewToModel() method.
        }
    
        /**
         * @param Cab $part
         */
        public static function convertModelToView(PartContract $part): PartView
        {
            $type = PartType::fromPart( $part );
            $properties = [
                'length' => $part->length->value,
                'height' => $part->height->value,
            ];
    
            return new PartView($part->getId(), $type->value, $properties);
        }
    }