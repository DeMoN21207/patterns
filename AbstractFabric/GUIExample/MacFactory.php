<?php

namespace patterns\AbstractFabric\GUIExample;

class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckBox(): CheckBox
    {
        return  new MacCheckBox();
    }
}