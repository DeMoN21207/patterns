<?php

namespace patterns\AbstractFabric\GUIExample;

class WinButton implements Button
{

    public function paint(): string
    {
        return '
        *************
        **WinButton**
        *************
        ';
    }
}