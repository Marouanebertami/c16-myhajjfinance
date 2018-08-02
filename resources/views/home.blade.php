@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard <p style="width: 50%;margin: 0;float: left;">My Solde: 150sr</p> <a href="#" style="float: right;" data-toggle="modal" data-target="#exampleModal">Buy solde</a></div>

                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buy Sold</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="{{route('buy')}}">
      <div class="modal-body">
       
            <div class="form-group">
                <label for="exampleFormControlInput1">Solde</label>
                <input type="text" class="form-control" name="solde" id="exampleFormControlInput1" placeholder="Sold">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">carte</label>
                <input type="text" class="form-control" name="carte" id="exampleFormControlInput1" placeholder="Carte Num">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

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
                              <th scope="col">My Solde</th>
                              <th scope="col">Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($soldes as $solde)
                            <tr>
                              <th scope="row">{{$solde->id}}</th>
                              <td>{{$solde->solde}}sr</td>
                              <td>{{$solde->date}}</td>
                            </tr>
                            @endforeach
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
