<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\Model\Parts\Gearbox\GearboxType;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\GearboxView;
    use Configurator\Domain\Parts\View\PartViewInterface;
    use Configurator\Domain\ViewInterface;

    class GearboxFactory extends PartFactory
    {
    
        /**
         * @param GearboxView $view
         */
        public function make(ViewInterface $view, bool $save = true): PartInterface
        {
            $id = $this->uniqueIdentifierGenerator->generate();
            $crawler = null;
    
            if ($view->gearboxType === GearboxType::Automatic) {
                $hasCrawler = $view->hasCrawlerAvailable;
                $crawler = ($hasCrawler)
                    ? 2
                    : null;
            }
            
            $gearbox = new Gearbox($id, $view->gearboxType, $view->torque, $view->gears, $crawler);
            
            return $this->save($gearbox, $save);
        }
    }