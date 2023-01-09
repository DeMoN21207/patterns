<?php
namespace patterns\adapter;


class ReportXmlAdapter implements AdapterInterface
{

    /* @var ReportXmlData */
    private $report;

    public function __construct(ReportXmlData $report)
    {
        $this->report = $report;
    }


    public function getData()
    {
        $xml = simplexml_load_string($this->report->getXmlResult(), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        return (array)json_decode($json, TRUE);
    }
}