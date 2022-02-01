<?php

namespace App\Imports;

use App\Models\Bien;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BienImport implements ToModel,WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bien([
            
            'id'=>$row['id'],

            'entreprise_id'     => $row['entreprise_id'], 
            
            'categorie_id'    => $row['categorie_id'],

            'referance'     => $row['referance'],

    

            'duree_ammortissement'    =>  $row['duree_ammortissement'],

            'date_mise_enservice'     =>  \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(intval($row['date_mise_enservice']))),
            'prix_achat'    => $row['prix_achat'],

            'factur'    => $row['factur'],


            'site'     => $row['site'],

            'sous_site'    => $row['sous_site'],

            'emplacement'     => $row['emplacement'],

            'code_barre'     => $row['code_barre'], 

            'designation'    => $row['designation'],

            'date_achat'    => \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(intval($row['date_achat']))),

            'fournisseur'     => $row[ 'fournisseur'],

            'n_serie'    => $row['n_serie' ],

            'n_factur'     => $row['n_factur'],

            'quantitee'     => $row['quantitee'],  

            'code_comptable'    => $row['code_comptable'],

            'compte_comptable'    => $row['compte_comptable' ],

            'n_bc'    => $row['n_bc'],

            'sous_famille'    => $row['sous_famille'],

            'affictation'=> $row['affictation'],

            'description_famille'    => $row[ 'description_famille' ]
        ]);
    }
}

