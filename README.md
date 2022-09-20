# Introduction

A Supplier Product List Processor is built using the Laravel Architecture, we also used csv files to build the product objects.

---

> Be sure to add that lovely star 😀 and fork it for your own copy

---

# Objectives

- We have multiple different formats of files that need to be parsed and returned back as a Product object with all the headings as mapped properties. 

Each product object constitutes a single row within the csv file.

---

# Who is this for? 

- This was an assigned project to test the understanding of basic workings of Laravel. It is worthy of note that only sample unique "combination_count.csv" was added.

---

# Packages/Dependencies used 

laragon, controller

---

# Install all the dependencies or packages used for development via Terminal

`Download Laragon (or as applicable; XAMPP or Valet) for creating the project`

`Then composer require league/csv`

`Then open VS Code and install via terminal:` 
`php artisan make::controller CsvParser`

---

# Things to add

- Add CsvParser
  - Type `use League\Csv\Reader;` at the upper part of CsvParser.php(app->Http->CsvParser.php)
  - Create csv folder, then each product file
  - input `"make","model","condition","grade","capacity","colour","network","count"` as the first row; then the the list for each items below
  - Then we create details of our csv file
  - Then we create an artisan command to run the csv reader
  - But first we fill the `routes folder` with `use App\Http\Controllers\CsvParser;` and the `Artisan::comand` below it.
  - Then for example run: `php artisan readApple`
  
 ---
 
 Have fun testing and improving it! 😎


