<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Branch;

class AssetController extends Component
{
    public $assetIdentificationName;
    public $branchName;
    public $assetType;
    public $metric;
    public $assetCost;
    public $assetPrice;


    protected $validateAsset = [

        'category_id'                           =>          'required',
        'branch_id'                             =>          'required',
        'assetType'                             =>          'required',
        'metic'                                 =>          'required',
        'assetCost'                             =>          'required',
        'assetPrice'                            =>          'required'
    
    ];

    protected $validateCategory = [];





    public function addNewAsset(){

            $newAsset                   =           $this->validate($this->validateAsset);




            $newAsset                   =          Asset::creat();

    }


    public function render()
    {

        $assetCategories                =           Category::all();
        $branch                         =           Branch::all();


        return view('livewire.asset',[
            'assetCategories'                   =>              $assetCategories,
            'branch'                            =>              $branch,          
        ]);
    }
}
