@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Create Expense</h1>
        </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Insert the description" value="{{old('description')}}">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Insert the amount" value="{{old('amount')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="/expense_reports{{$report->id}}">Back</a> 
           </form>
        </div>
    </div>            
            
@endsection