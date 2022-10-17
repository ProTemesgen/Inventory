<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Branch;
use Illuminate\Support\Facades\DB;

class AssetController extends Component
{
    public $assetIdentificationName;
    public $branchName;
    public $assetType;
    public $metric;
    public $assetCost;
    public $assetPrice;
    public $assetDescription;

    public $errorMessage;

    public $category_id;
    public $branch_id;


    protected $validateAsset = [

        'category_id'                           =>          'required',
        'branch_id'                             =>          'required',
        'assetCost'                             =>          'required',
        'assetDescription'                      =>          'nullable'
    
    ];

    protected $validateCategory = [];





    public function addNewAsset(){

            
               

            $category = DB::table('categories')->where('assetIdentificationName', $this->assetIdentificationName)->first();
            
            
            if($category){
                $this->category_id = $category->id;   
            }
            else{
                return $this->errorMessage = 'The above message is required';
            }




            $branch = DB::table('branches')->where('branchName', $this->branchName)->first();
            
            if($branch){
                $this->branch_id = $branch->id;
            }
            else{
                return $this->errorMessage = 'The above message is required';
            }
            
            
            $newAsset                   =           $this->validate($this->validateAsset);
            Asset::create($newAsset);

            $this->assetIdentificationName = '';
            $this->branchName = '';
            $this->assetCost = '';
            $this->assetDescription = '';
    }


    public function render()
    {

        $assetCategories                =           Category::all();
        $branch                         =           Branch::all();
        $asset                          =           Asset::all();

        return view('livewire.asset',[
            'assetCategories'                   =>              $assetCategories,
            'branch'                            =>              $branch,   
            'errorMessage'                      =>              $this->errorMessage,
            'assets'                            =>              $asset       
        ]);
    }
}
