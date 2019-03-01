@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Are you sure you want to delete report {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col">
           <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                
                <button type="submit" class="btn btn-primary">Delete</button>
                <a class="btn btn-secondary" href="/expense_reports">Back</a> 
           </form>
        </div>
    </div>            
            
@endsection