<?php

namespace patterns\AbstractFabric\GUIExample;

class MacCheckBox implements CheckBox
{

    public function paint(): string
    {
        return '
        -----------------
        ---MacCheckbox---
        -----------------
        ';
    }
}