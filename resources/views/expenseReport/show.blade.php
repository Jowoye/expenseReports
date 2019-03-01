@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Report: {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <h3>Details</h3>
            <table class="table">
                    <td><h4>Description</h4></td>
                    <td><h4>Created date</h4></td>
                    <td><h4>Amount</h4></td>
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{$expense->description}}</td>
                        <td>{{$expense->created_at}}</td>
                        <td>{{$expense->amount}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">Create expense</a> 
          <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/confirmSendMail">Send email</a> 
          <a class="btn btn-secondary" href="/expense_reports">Back</a> 
        </div>
    </div>            
            
@endsection