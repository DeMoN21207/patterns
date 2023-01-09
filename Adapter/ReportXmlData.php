<?php

namespace patterns\adapter;

class ReportXmlData
{

    /**
     * Get Xml result
     * @return string
     */
    public function getXmlResult(): string
    {
        return '<?xml version="1.0" encoding="UTF-8" ?>
                <root>
                  <name>Иван</name>
                  <middleName>Федорович</middleName>
                  <lastname>Бунин</lastname>
                  <addres>Улица пушкина д. Колотшкина</addres>
                </root>';
    }
}