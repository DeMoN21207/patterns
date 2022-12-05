<?php

namespace patterns\AbstractFabric\GUIExample;

class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckBox(): CheckBox
    {
        return new WinCheckBox();
    }
}