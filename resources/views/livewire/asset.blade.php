<div class="m-4">

        <div class="d-flex flex-row-reverse mb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New Asset
            </button>
        </div>

        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your Asset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.preventdefault action="POST">
                        <div class="container">
                            <div class="row">
                                <label for=""><b>Category *</b></label>
                                <div class="col">
                                    <div>
                                        
                                        <select name="" id="" class="form-control" wire:model.lazy = 'assetIdentificationName'>
                                            <option value="">-- Select A Category --</option>
                                            @foreach($assetCategories as $category)
                                                <option value="{{$category->assetIdentificationName}}">{{$category->assetIdentificationName}}</option>
                                            @endforeach
                                        </select>
                                        <span style="color:red;">{{$errorMessage}}</span>
                                    </div>
                                </div>
                                <div class="col col-lg-3">
                                    <div>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            Add New Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for=""><b>Branch *</b></label>
                                    <select name="" id="" class="form-control" wire:model.lazy = 'branchName'>
                                        <option value="">-- Select Branch for your Asset --</option>
                                        @foreach($branch as $branc)
                                            <option value="{{$branc->branchName}}">{{$branc->branchName}}</option>
                                        @endforeach
                                    </select>
                                    <span style="color:red;">{{$errorMessage}}</span>
                                </div>
                                <div class="col col-lg-3">

                                </div>
                            </div>
                            
                        </div>
                        <!-- <hr class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for=""><b>Type</b></label>
                                    <select name="" id="" class="form-control" wire:model.lazy = 'assetType'>
                                        <option value="">-- Select Type --</option>
                                        <option value="Food&beverage">Food & Beverage</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Cosmotics">Cosmotics</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for=""><b>Mesurment</b></label>
                                    <select name="" id="" class="form-control" wire:model.lazy = 'metric'>
                                        <option value="">-- Selec Mesurment Type --</option>
                                        <option value="Item">Item</option>
                                        <option value="Killo">Killo</option>
                                        <option value="Litter">Litter</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div> -->
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for=""><b>Cost Of Asset *</b></label>
                                    <input type="number" class="form-control" wire:model.lazy = 'assetCost'>
                                    @error('assetCost')
                                        <span style="color:red;">{{$message}}</span>
                                    @enderror
                                   
                                </div>
                                <div class="col" wire:model.lazy = 'assetDescription'>
                                    <label for=""><b>Description</b></label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model.lazy = 'assetDescription'></textarea>
                                </div>
                            </div>
                        </div>
                        

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click = 'addNewAsset'>+ Add</button>
                </div>
                </div>
            </div>
        </div>







    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Asset</th>
                <th>Amount in Store</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
           @foreach($assets as $asset)

           <tr>
                <td>{{$asset->category->assetIdentificationName}}</td>
                <td>Amount in store</td>
                <td>{{$asset->assetCost}}</td>
                <td>{{$asset->category->categoryPrice}}</td>
                <td><a href="" class="info">Edit</a></td>
            </tr>

           @endforeach
            
        </tbody>
    </table>

    <script>

        $(document).ready(function(){
            $('#example').DataTable();
        });
        
    </script>
     
</div>