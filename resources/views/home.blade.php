@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="post" style="mrx-5">
                      {{ csrf_field() }}
                      <div class="form-group">
                       <label for="email">Product Name:</label>
                       <input type="text" class="form-control" name="product_name">
                      </div>
                      <div class="form-group">
                       <label for="pwd">Quantity in stock:</label>
                       <input type="text" class="form-control" name="quantity_in_stock">
                      </div>
                      <div class="form-group">
                       <label for="pwd">Price per item:</label>
                       <input type="text" class="form-control" name="price_per_item">
                      </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Stocks</div>

                <div class="panel-body">

                      <div class="form-group">
                        <table class="table table-striped">
                         <thead>
                           <tr>
                             <th scope="col">ID</th>
                             <th scope="col">User</th>
                             <th scope="col">Product Name</th>
                             <th scope="col">Quantity in stock</th>
                             <th scope="col">Price per item</th>
                             <th scope="col">Total value number</th>
                             <th scope="col">Created Date</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach ($stocks as $stock)
                             <tr>
                               <th scope="row">{{ $stock->id }}</th>
                               <td>{{ $stock->User->name }}</td>
                               <td>{{ $stock->product_name }}</td>
                               <td>{{ $stock->quantity_in_stock }}</td>
                               <td>{{ $stock->price_per_item }} $</td>
                               <td>{{ $stock->quantity_in_stock * $stock->price_per_item }} </td>
                               <td>{{ $stock->created_at }} </td>
                             </tr>
                           @endforeach
                           <tr>
                             <th scope="row"></th>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>Total Product</td>
                             <td>{{ $total }} </td>
                           </tr>
                         </tbody>
                       </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
