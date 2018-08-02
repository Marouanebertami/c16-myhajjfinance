@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                    <div class="col-md-4">
                   <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">My Solde</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}">Product buy</a>
                      </li>
                    </ul> 
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Product</th>
                              <th scope="col">Date buy it</th>
                              <th scope="col">price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>T-shirt</td>
                              <td>2018/05/20</td>
                              <td>250sr</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>  
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

