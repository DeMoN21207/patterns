<?php

namespace patterns\AbstractFabric\GUIExample;

require_once '../../vendor/autoload.php';

function clientCode(GUIFactory $factory)
{
    print "\n";
    echo $factory->createButton()->paint();
    echo $factory->createCheckBox()->paint();
    print "\n";
}


if (php_uname('s') == 'Windows NT') {
    print 'Detected Windows env. \n';
    clientCode(new WinFactory());
} else {
    print 'Detected Mac env. \n';
    clientCode(new MacFactory());
}





