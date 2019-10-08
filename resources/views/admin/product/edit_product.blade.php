@extends('admin.layout.master')
@section('content')
    <div class="edit-product" style="padding: 30px 30px">
        <div class="header-edit-product">
            <h3>Product</h3>
            <small>Add</small>
        </div>
        <hr>
        <div class="main-edit-product" style="width: 30%">
            <form action="{{route('suasanpham',$product->id)}}" method="post">
                <div class="form-group">
                    <label>Name:</label><br>
                    <input type="text" class="form-control" name="name" value="{!! $product->name !!}">
                </div>
                <div class="form-group">
                    <label>Slug Name:</label><br>
                    <input type="text" class="form-control" name="slug_name" value="{!! $product->slug_name !!}">
                </div>
                <div class="form-group">
                    <label>Meta Name:</label><br>
                    <input type="text" class="form-control" name="meta_name" value="{!! $product->meta_name !!}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image_product" value="{!! $product->image_product !!}">
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <input type="text" class="form-control" name="description" value="{!! $product->description !!}">
                </div>
                <div class="form-group">
                    <label>Detail</label><br>
                    <input type="text" class="form-control" name="detail" value="{!! $product->detail !!}">
                </div>
                <div class="form-group">
                    <label>Unit price</label><br>
                    <input type="text" class="form-control" name="unit_price" value="{!! $product->unit_price !!}">
                </div>
                <div class="form-group">
                    <label>Promotion_price</label><br>
                    <input type="text" class="form-control" name="promotion_price" value="{!! $product->promotion_price !!}">
                </div>
                <div class="form-group">
                    <label>Category</label><br>
                    <select name="category" class="form-control">
                        @foreach($product as $pro)
                            @foreach($cate as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label><br>
                    <select name="brand" class="form-control">
                       @foreach($product as $pro)
                           @foreach($brand as $bra)
                               <option value="{{$bra->id}}">{{$bra->name}}</option>
                               @endforeach
                           @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>New</label><br>
                    <input type="text" class="form-control" name="new" value="{!! $product->new !!}">
                </div>
                <div class="">
                    <button type="submit" name="save" class="btn btn-default">Save</button>
                    <button type="submit" name="cancel" class="btn btn-default">Cancel</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection