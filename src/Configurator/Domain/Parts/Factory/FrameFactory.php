<?php
    
    namespace Configurator\Domain\Parts\Factory;
    
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Frame\FrameAxle;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\FrameAxleView;
    use Configurator\Domain\Parts\View\FrameView;
    use Configurator\Domain\Parts\View\PartViewInterface;
    use Configurator\Domain\ViewInterface;

    class FrameFactory extends PartFactory
    {
    
        /**
         * @param FrameView $view
         */
        public function make(ViewInterface $view, bool $save = true): PartInterface
        {
            $id = $this->uniqueIdentifierGenerator->generate();
    
            $axleViews = $view->axles;
            $axles = [];
    
            foreach ($axleViews as $axleView) {
                $axles[] = $this->makeFrameAxle( $axleView );
            }
    
            $frame =  new Frame($id, $view->frameType, $axles);
            
            return $this->save($frame, $save);
        }
        
        private function makeFrameAxle( FrameAxleView $frameAxleView ): FrameAxle {
            return new FrameAxle($frameAxleView->mode, $frameAxleView->isLiftable);
        }
    }