<?php

include( 'autoload.php' );
$siteaccess = OpenPABase::getInstances();
foreach( $siteaccess as $sa )
{
    $command = "php bin/php/ezcache.php --clear-id='ini' -s$sa";
    print "Eseguo: $command \n";
    system( $command );
}

?>
