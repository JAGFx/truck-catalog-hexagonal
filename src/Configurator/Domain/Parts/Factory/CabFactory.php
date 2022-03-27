<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\CabView;
    use Configurator\Domain\Parts\View\PartViewInterface;

    class CabFactory extends PartFactory
    {
        /**
         * @param CabView $partView
         */
        public function make(PartViewInterface $partView, bool $save = true): PartInterface
        {
            $id = $this->uniqueIdentifierGenerator->generate();
            $cab = new Cab($id, $partView->length, $partView->height);
            
            return ($save)
             ? $this->save($cab)
                : $cab;
        }
    }
