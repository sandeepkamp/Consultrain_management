@extends('layouts.app')
 
@section('content')

<h2 style="padding: 2px;">Project Information</h2>
<div class="row">
    
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projectmanagement.create') }}"> Create New</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Order Number</th>
            <th>Customer Name</th>
            <th>Project Leader</th>
            <th>Iso Service</th>
            <th>Agency Name</th>
            <th width="80px">Details</th>
        </tr>
        @foreach($projectmanagements as $projectmanagement)
        <tr>
           <td>{{ ++$i}}</td>
           <td>{{ $projectmanagement->order_no}}</td>
           <td>{{ $projectmanagement->customer->cust_name}}</td>
           <td>{{ $projectmanagement->project_lead}}</td>
           <td>{{ $projectmanagement->product->name}}</td>
           <td>{{ $projectmanagement->agency->agency_name }}</td>
           <td>
                <form action=" " method="POST">
   
                     <a class="btn btn-info" href="{{ route('projectmanagement.show',$projectmanagement->id) }}">Show</a>



                        <!-- <a class="btn btn-primary" href="{{ route('projectmanagement.edit',$projectmanagement->id) }}">Edit</a> -->
                    @csrf
                    @method('DELETE')
      
                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection