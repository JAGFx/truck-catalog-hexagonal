<?php

namespace Configurator\Domain\Parts\Factory;

    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\CabView;
    use Configurator\Domain\ViewInterface;

    class CabFactory extends PartFactory
    {
        /**
         * @param CabView $view
         */
        public function make(ViewInterface $view, bool $save = true): PartInterface
        {
            $id = $this->uniqueIdentifierGenerator->generate();
            $cab = new Cab($id, $view->length, $view->height);

            return $this->save($cab, $save);
        }
    }
