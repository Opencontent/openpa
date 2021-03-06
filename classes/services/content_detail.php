<?php

class ObjectHandlerServiceContentDetail extends ObjectHandlerServiceBase
{
    protected $attributeList;
    
    function run()
    {        
        $this->fnData['attributes'] = 'getAttributeList';
        $this->fnData['identifiers'] = 'getAttributeListIdentifiers';
        $this->fnData['has_content'] = 'getAttributeListCount';        
    }

    function getAttributeList()
    {
        if ( $this->attributeList === null )
        {
            $this->attributeList = array();
            $mainContent = $this->container->attribute( 'content_main' );
            $extraInfoCollectors = $this->container->attribute( 'content_infocollection' )->attribute( 'extra_identifiers' );
            foreach( $this->container->attributesHandlers as $attribute )
            {
                $fullData = $attribute->attribute( 'full' );
                if ( ( $fullData['has_content'] || $fullData['show_empty'] )
                     && !$fullData['exclude']
                     && !$fullData['contatti']
                     && !in_array( $attribute->attribute( 'identifier' ), $mainContent->attribute( 'identifiers' ) )
                     && !in_array( $attribute->attribute( 'identifier' ), $extraInfoCollectors ) )
                {
                    $this->attributeList[$attribute->attribute( 'identifier' )] = $attribute;
                }
            }
        }
        return $this->attributeList;
    }
    
    protected function getAttributeListIdentifiers()
    {
        return array_keys( $this->getAttributeList() );
    }
    
    protected function getAttributeListCount()
    {
        return count( $this->getAttributeList() ) > 0;
    }
}