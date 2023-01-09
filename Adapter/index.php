<?php


use patterns\adapter\AdapterInterface;
use patterns\adapter\ReportJsonAdapter;
use patterns\adapter\ReportXmlAdapter;
use patterns\adapter\ReportXmlData;
use patterns\adapter\ReportJsonData;
use patterns\adapter\ReportArrayData;

require_once '../vendor/autoload.php';

$reports = [
    new ReportXmlData(),
    new ReportJsonData(),
    new ReportArrayData()
];


function clientCode(array $reports)
{
    foreach ($reports as $report) {
        $obj = null;
        switch ($report) {
            case $report instanceof ReportXmlData:
                $obj = new ReportXmlAdapter($report);
                break;
            case $report instanceof ReportJsonData:
                $obj = new ReportJsonAdapter($report);
                break;
            case $report instanceof ReportArrayData:
                $obj = $report;
                break;
            default:
        }
        viewResult($obj);
    }
}


function viewResult(AdapterInterface $report): void
{
    print_r($report->getData());
}

clientCode($reports);


