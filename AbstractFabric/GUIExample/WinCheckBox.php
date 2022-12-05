<?php

namespace patterns\AbstractFabric\GUIExample;

class WinCheckBox implements CheckBox
{

    public function paint(): string
    {
        return '
        ***************
        **WinCheckBox**
        ***************
        ';
    }
}