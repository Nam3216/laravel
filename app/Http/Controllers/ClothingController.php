<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    //METODOS GET

    //1 GET ALL
    public function all(){
        
        $cloths=Cloth::all();
        return $cloths;
     
        
    }

    //2 GET BY CATEGORY
//http://localhost/clothing/clothing/public/clothing/category/musculoso
    public function category($category){
     
       $clothByCategory=Cloth::where("category",$category)//query where, la propiedad categoria diga lo q se obtuvo desde url param
                            ->get();//llamo metodo get
       return $clothByCategory;
    }
//3 GET BY ID para idcontr
    public function detail($id){//recbe el url params desde la ruta q da id
        //return "detail";
        $clothById=Cloth::find($id);//busca en db ese objeto
        return $clothById;
    }
}

