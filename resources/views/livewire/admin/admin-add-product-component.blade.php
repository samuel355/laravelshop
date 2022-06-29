<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right"> All Products</a>
                            </div>
                       </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div role="alert" class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form action="" class="form" wire:submit.prevent='addProduct'>
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="product-name"> Product Name</label>
                                        <input type="text" class="form-control input-md" placeholder="Product Name" wire:model = 'name' wire:keyup="generateSlug">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product-name"> Product Slug</label>
                                        <input type="text" class="form-control input-md" placeholder="Product Slug" wire:model = 'slug'>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <label for="product-description"> Short Description</label>
                                        <textarea name="description" id="" class="form-control" wire:model='short_description'></textarea>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <label for="product-description"> Detail Description</label>
                                        <textarea name="description" id="" class="form-control" wire:model='description'></textarea>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">
                                        <label for="product-name"> Regular Price</label>
                                        <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model='regular_price'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product-name"> Sale Price</label>
                                        <input type="text" class="form-control input-md" placeholder="Sale Price" wire:model="sale_price">
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">
                                        <label for="product-name"> SKU</label>
                                        <input type="text" class="form-control input-md" wire:model="SKU">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product-name"> Stock Status</label>
                                        <select class="form-control" name="stock-status" id="" wire:model='stock_status'>
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">
                                        <label for="product-name"> Featured</label>
                                        <select class="form-control" name="featured" id="" wire:model='featured'>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product-name"> Quantity</label>
                                        <input type="text" class="form-control input-md" placeholder="" wire:model="quantity">
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">
                                        <label for="product-name">Product Image</label>
                                        <input type="file" class="form-control" wire:model='image'>

                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" alt="Product Image" width="120px">
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product-name"> Category</label>
                                        <select class="form-control" wire:model="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                </div>

                                <div class="form-group" style="margin-top: 3rem; ">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button style="padding: 10px 20px" type="submit" class="btn btn-primary"> Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
