<?php
/**
 * Created by PhpStorm.
 * User: taylorbroad
 * Date: 1/6/17
 * Time: 3:48 AM
 */

namespace App\Classes;


class AircraftListExcel extends \Maatwebsite\Excel\Files\ExcelFile
{
    protected $delimiter  = ',';
    protected $enclosure  = '"';
    protected $lineEnding = '\r\n';

    public function getFile()
    {
        return storage_path('Imports'). '/fleet.csv';
    }
    public function getFilters()
    {
        return parent::getFilters(); // TODO: Change the autogenerated stub
    }
}