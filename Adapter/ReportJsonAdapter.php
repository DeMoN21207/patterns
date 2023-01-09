<?php

namespace patterns\adapter;

class ReportJsonAdapter implements AdapterInterface
{

    /**
     * @var ReportJsonData
     */
    private $report;

    public function __construct(ReportJsonData $report)
    {
        $this->report = $report;
    }

    public function getData()
    {
        return json_decode($this->report->getJsonData(), true);

    }
}