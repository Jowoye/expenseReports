@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Create Report</h1>
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
           <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Insert the title" value="{{old('title')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="/expense_reports">Back</a> 
           </form>
        </div>
    </div>            
            
@endsection