<?php

class OpenPATempletizable
{
    protected $data;
    
    public function attributes()
    {
        $keys = array_keys( $this->data );
        return $keys;
    }
    
    public function hasAttribute( $key )
    {
        return in_array( $key, $this->attributes() );
    }
    
    public function attribute( $key )
    {
        if ( $this->hasAttribute( $key ) )
        {
            return $this->data[$key];
        }        
        eZDebug::writeNotice( "Attribute $key does not exist", __METHOD__ );
        return false;
    }
    
    public function __construct( $data )
    {
        $this->data = $data;
    }
    
}