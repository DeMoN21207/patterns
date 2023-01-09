<?php


namespace patterns\adapter;

class ReportArrayData implements AdapterInterface
{

    /**
     * Get result in array
     * @return string[]
     */
    public function getData(): array
    {
        return [
            'name' => 'Иван',
            'middleName' => 'Федорович',
            'lastname' => 'Бунин',
            'addres' => 'Улица пушкина д. Колотшкина'
        ];

    }

}