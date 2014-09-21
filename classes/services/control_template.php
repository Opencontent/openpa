<?php

class ObjectHandlerServiceControlTemplate extends ObjectHandlerServiceBase
{
    function run()
    {
        $this->data['full'] = $this->getViewTemplate( 'full' );
        $this->data['line'] = $this->getViewTemplate( 'line' );
        $this->data['panel'] = $this->getViewTemplate( 'panel' );
        $this->data['carousel'] = $this->getViewTemplate( 'carousel' );
    }

    protected function getViewTemplate( $view )
    {
        $currentErrorReporting = error_reporting();
        error_reporting( 0 );
        $defaultTemplateUri = "design:openpa/{$view}/_default.tpl";
        $templateUri = "design:openpa/{$view}/{$this->container->currentClassIdentifier}.tpl";
        $tpl = eZTemplate::factory();
        $result = $tpl->loadURIRoot( $templateUri, false, $extraParameters );
        error_reporting( $currentErrorReporting );
        return $result ? $templateUri : $defaultTemplateUri;
    }
}