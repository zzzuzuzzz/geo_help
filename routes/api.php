<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Company;

Route::post('/loadJson', function (Request $request) {
    foreach ($request->companies as $company) {
        $result = [
            'child' => $company['type'] == 'chain' ? false : true,
            'id_from_yandex' => isset($company['id']) ? $company['id'] : $company['displayName'],
            'name' => $company['displayName'],
            'address' => isset($company['address']) ? $company['address']['formatted']['value'] : 'Адрес не указан',
            'phone' => isset($company['phones'][0]['formatted']) ? $company['phones'][0]['formatted'] : 'Номер не указан',
            'site' => isset($company['urls'][0]['value']) ? $company['urls'][0]['value'] : 'Сайт не указан',
            'category' => $company['rubrics'][0]['rubric']['name']
        ];

        if (isset($company['id'])) {
            if (Company::where('id_from_yandex', $company['id'])->first()) {
                continue;
            }
        }

        if ($company['type'] == 'chain') {
            if (Company::where('id_from_yandex', $company['displayName'])->first()) {
                continue;
            }
        }

        Company::create($result);
    }
});
