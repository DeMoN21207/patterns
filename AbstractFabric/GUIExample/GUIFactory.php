<?php

namespace patterns\AbstractFabric\GUIExample;

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckBox(): CheckBox;
}