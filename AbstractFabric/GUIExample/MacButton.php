<?php

namespace patterns\AbstractFabric\GUIExample;



class MacButton implements Button
{

    public function paint(): string
    {
        return '
        -------------------------------
        --         Mac Button        --
        -------------------------------
        ';
    }
}