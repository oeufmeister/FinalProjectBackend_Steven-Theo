@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add a New Product</h2>
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


    <form action="{{ route('products.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name" minlength="5" maxlength="80">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Category:</strong>
                    <input type="text" name="detail" class="form-control" placeholder="Category" minlength="5" maxlength="80">
		            <!-- <textarea class="form-control" name="detail" placeholder="Detail"></textarea> -->
		        </div>
		    </div>
            <div>
		        <div class="form-group">
		            <strong class="col-xs-12 col-sm-12 col-md-12" >Price:</strong>
                    <span style="display:flex">
                        <p class="ml-4 mr-3 mt-1">Rp</p><input class="col-xs-12 col-sm-12 col-md-12 form-control" type="text" name="price" placeholder="Price">
                    </span>
		        </div>
		    </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center display-flex">
                    <a class="btn btn-primary " href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="ml-4 btn btn-primary">Submit</button>
                </div>
		</div>


    </form>


@endsection