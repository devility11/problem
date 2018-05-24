<?php

interface Problem
{
    //public function run(...$params);
    //public function checkUrl(string $url): bool;
    
    //pull the data from the url
    public function getDataFromUrl();
    
    public function JsonToCsv();
    public function formatCsv();
    public function saveCsvToDisk();
    public function checkJsonSource();
    public function updateCsvFile();
    public function getJsonSchema();
    
}


?>

