<?php

namespace App\Imports;


use App\Models\Mediacenter;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class MediacentersImport implements ToModel,WithValidation,WithHeadingRow
{

    use Importable;

    protected $rules;

    public function __construct()
    {
        $this->rules = $this->rules();
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[0])) {
            return null;
        }
        return new Mediacenter([
            'name'     => $row['name'],
        ]);
    }

    public function rules(): array
    {
        return [
            'data.*.name' => 'required|string|max:255|unique:mediacenters,name',
        ];
    }

}
