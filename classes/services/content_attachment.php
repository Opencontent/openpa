<?php

class ObjectHandlerServiceContentAttachment extends ObjectHandlerServiceBase
{
    protected $list;

    protected $pageLimit = 20;

    function run()
    {
        $this->fnData['attributes'] = 'getAttributeList';
        $this->fnData['identifiers'] = 'getAttributeListIdentifiers';
        $this->fnData['has_content'] = 'getAttributeListCount';
        $this->fnData['children_count'] = 'getChildrenCount';
        $this->fnData['children'] = 'getChildren';
        $this->data['page_limit'] = $this->pageLimit;
    }

    protected function getChildrenClasses()
    {
        $classes = OpenPAINI::variable('GestioneClassi', 'classi_allegato', array( 'file_pdf' ) );
        if ($this->container->hasAttribute('content_virtual')){
            $virtualParameters = $this->container->attribute( 'content_virtual' )->attribute( 'folder' );
            if (is_array($virtualParameters['classes']) && !empty($virtualParameters['classes'])){
                $classes = array_diff( $classes, $virtualParameters['classes'] );
            }
        }
        return $classes;
    }

    protected function getChildrenCount()
    {
        $count = 0;
        $node = $this->container->getContentMainNode();
        if ( $node instanceof eZContentObjectTreeNode )
        {
            $count = $node->subTreeCount( array(
                'ClassFilterType' => 'include',
                'ClassFilterArray' => $this->getChildrenClasses(),
                'Depth' => 1,
                'DepthOperator' => 'eq' ) );
        }
        return $count;
    }

    protected function getChildren()
    {
        $list = array();
        $uri = $GLOBALS['eZRequestedURI'];
        $userParameters = $uri instanceof eZURI ? $uri->userParameters() : array();
        $offset = isset($userParameters['offset']) ? $userParameters['offset'] : 0;

        $node = $this->container->getContentMainNode();
        if ( $node instanceof eZContentObjectTreeNode )
        {
            $list = $node->subTree( array(
                'ClassFilterType' => 'include',
                'ClassFilterArray' => $this->getChildrenClasses(),
                'SortBy' => $node->attribute( 'sort_array' ),
                'Depth' => 1,
                'Limit' => $this->pageLimit,
                'Offset' => $offset,
                'DepthOperator' => 'eq' ) );
        }
        return $list;
    }

    protected function getAttributeListIdentifiers()
    {
        return array_keys( $this->getAttributeList() );
    }

    protected function getAttributeListCount()
    {
        return count( $this->getAttributeList() ) > 0;
    }

    protected function getAttributeList()
    {
        if ($this->list === null)
        {
            $this->list = array();
            foreach( $this->container->attributesHandlers as $attribute )
            {
                if ( $attribute->is( 'attributi_allegati_atti' ) && $attribute->attribute( 'contentobject_attribute' )->attribute( 'has_content' ) )
                {
                    $this->list[$attribute->attribute( 'identifier' )] = $attribute->attribute( 'contentobject_attribute' );
                }
            }
        }
        return $this->list;
    }
}
