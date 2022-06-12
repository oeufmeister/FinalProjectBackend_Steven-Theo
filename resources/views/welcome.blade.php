@extends('layouts.app')

@section('content')
            <!-- karosel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mb-5">
                <div class="carousel-item active">
                    <img class="d-block mw-100" src="https://cdn.discordapp.com/attachments/891959446857744394/983767415743741972/Tesla_Model_Sus.png" alt="ModelS">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block mw-100" src="https://cdn.discordapp.com/attachments/891959446857744394/983756774035296356/Tesla_Model_E.png" alt="ModelE">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block mw-100" src="https://media.discordapp.net/attachments/891959446857744394/983767415345262652/Tesla_Model_Coom.png?" alt="ModelX">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>


            <div class="content">
                <div class="blockquote text-center">
                    Product Catalogue: 
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>Rp.{{ $product->price }},00</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="col text-center">
                                    <a class="btn btn-info" href="/billReceipt">Cart</a>
                                    <!-- @can('product-edit')
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                    @endcan -->

                                    @csrf
                                    <!-- @method('DELETE')
                                    @can('product-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @endcan -->
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

@endsection
