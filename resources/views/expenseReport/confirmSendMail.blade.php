@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Mail Report</h1>
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
            <form action="/expense_reports/{{ $report->id}}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Insert the email" value="{{old('email')}}">
                </div>
                <button type="submit" class="btn btn-primary">Send email</button>
                <a class="btn btn-secondary" href="/expense_reports">Back</a> 
           </form>
        </div>
    </div>            
            
@endsection