@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <div class="row">
    <form method="post" action="{{url('/create/employee')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee ID:</label>
            <input type="number" class="form-control" name="emp_id"/>
        </div>
        <div class="form-group">
            <label for="description">Employee Name:</label>
            <input type="text" class="form-control" name="emp_name"/>
        </div>
        <div class="form-group">
            <label for="description">Employee Email:</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            <label for="description">Employee Date of Birth:</label>
            <input type="date" class="form-control" name="emp_dob"/>
        </div>
        <div class="form-group">
            <label for="description">Employee Date of Joining:</label>
            <input type="date" class="form-control" name="emp_doj"/>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
