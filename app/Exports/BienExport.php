<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Models\Bien;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;

class BienExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        

        $entreprises  = Entreprise::get();
        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->select('biens.*', 'nom_entreprises', 'nom_cat')
            ->get();

           /* $biens->transform(function($i) {
                unset($i->categorie_id);
                unset($i->entreprise_id);
                unset($i->created_at);
                unset($i->updated_at);
                return $i;
            });
            */
            /*

           foreach( $biens as &$row) {
            
            $row->date_ammortssement =date('Y-m-d',strtotime($row->duree_ammortissement."year", strtotime($row->date_mise_enservice)));
            if($row->duree_ammortissement>0){
                $row->taux_ammortissement = 100/($row->duree_ammortissement);   
            }else{
                $row->taux_ammortissement="0";
            }
            if($row->duree_ammortissement>0){

                $row->ammortissement = ( 100/($row->duree_ammortissement))*($row->prix_achat);
            }else{

                $row->ammortissement ="0";

            }
            if($row->duree_ammortissement>0){

                $row->cumul_ammortissement =($row->ammortissement)*($row->duree_ammortissement);

            }else{

                $row->cumul_ammortissement="0";

            }
            if($row->duree_ammortissement>0){

                $row->vna = ($row->prix_achat)-($row->cumul_ammortissement);

            }else{

                $row->vna="0";

            }
            

        }
        */
             return $biens;   

    }

    public function headings(): array
    {
        
        $column = Schema::getColumnListing("biens"); 
        /*                          
        unset($column[1]);
        unset($column[2]);
        unset($column[23]);
        unset($column[24]);
        
        array_push($column,"entreprise");
        array_push($column,"categorie");

        array_push($column,"Date d'ammortissement");
        array_push($column,"taux d'ammortissement");
        array_push($column,"'ammortissement");
        array_push($column,"cumul d'ammortissement");
        array_push($column,"VNA");
        */

        return $column;
    }
    
}
