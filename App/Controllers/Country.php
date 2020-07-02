<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Country as CountryModel;

class Country
{
    private $model;

    public function __construct() {

        $this->model = new CountryModel();
    }

    public function index() {

        $countryList = $this->model->getAll(['country_id', 'country', 'last_update']);

        require(BASE_PATH . '/App/Views/Country/index.php');
    }

}
