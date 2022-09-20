<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CsvParser;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('readAASTRA', function () {
    $this->comment(CsvParser::readAASTRA());
})->purpose('Read csv Data');

Artisan::command('readABOOK', function () {
    $this->comment(CsvParser::readABOOK());
})->purpose('Read csv Data');

Artisan::command('readACCESSORIZE', function () {
    $this->comment(CsvParser::readACCESSORIZE());
})->purpose('Read csv Data');

Artisan::command('readAcer', function () {
    $this->comment(CsvParser::readAcer());
})->purpose('Read csv Data');

Artisan::command('readADMET', function () {
    $this->comment(CsvParser::readADMET());
})->purpose('Read csv Data');

Artisan::command('readAEROFLEX', function () {
    $this->comment(CsvParser::readAEROFLEX());
})->purpose('Read csv Data');

Artisan::command('readAIRFORCE', function () {
    $this->comment(CsvParser::readAIRFORCE());
})->purpose('Read csv Data');

Artisan::command('readAlcatel', function () {
    $this->comment(CsvParser::readAlcatel());
})->purpose('Read csv Data');

Artisan::command('readAKASA', function () {
    $this->comment(CsvParser::readAKASA());
})->purpose('Read csv Data');

Artisan::command('readApple', function () {
    $this->comment(CsvParser::readApple());
})->purpose('Read csv Data');

Artisan::command('readSamsung', function () {
    $this->comment(CsvParser::readSamsung());
})->purpose('Read csv Data');

Artisan::command('readZAGG', function () {
    $this->comment(CsvParser::readZAGG());
})->purpose('Read csv Data');

Artisan::command('readXQISIT', function () {
    $this->comment(CsvParser::readXQISIT());
})->purpose('Read csv Data');

Artisan::command('readHuawei', function () {
    $this->comment(CsvParser::readHuawei());
})->purpose('Read csv Data');

Artisan::command('readLG', function () {
    $this->comment(CsvParser::readLG());
})->purpose('Read csv Data');

Artisan::command('readMicrosoft', function () {
    $this->comment(CsvParser::readMicrosoft());
})->purpose('Read csv Data');

Artisan::command('readNokia', function () {
    $this->comment(CsvParser::readNokia());
})->purpose('Read csv Data');

Artisan::command('readSony', function () {
    $this->comment(CsvParser::readSony());
})->purpose('Read csv Data');

Artisan::command('readVodafone', function () {
    $this->comment(CsvParser::readVodafone());
})->purpose('Read csv Data');

Artisan::command('readZTE', function () {
    $this->comment(CsvParser::readZTE());
})->purpose('Read csv Data');






Artisan::command('readProduct', function () {
    $this->comment(CsvParser::readProduct());
})->purpose('Read csv Data');

Artisan::command('readComma', function () {
    $this->comment(CsvParser::readComma());
})->purpose('Read csv Data');