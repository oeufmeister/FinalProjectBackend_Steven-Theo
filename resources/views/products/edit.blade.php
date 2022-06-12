@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
		        </div>
		    </div>
            <div class="form-group">
		            <strong class="col-xs-12 col-sm-12 col-md-12" >Price:</strong>
                    <span style="display:flex">
                        <p class="ml-4 mr-3 mt-1">Rp</p><input class="col-xs-12 col-sm-12 col-md-12 form-control" type="text" name="price" placeholder="Price">
                    </span>
		        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center display-flex">
                    <a class="btn btn-primary " href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="ml-4 btn btn-primary">Submit</button>
                </div>
		</div>


    </form>


@endsection