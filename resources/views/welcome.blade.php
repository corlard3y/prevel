@extends('template')

@section('content')
        <div class="container" style="margin-top:2em">

        <div class='jumbotron'>
            <h1>Ask a  Question</h1>
            <p>
                Ask any question you want to know about Laravel and we will get answers for you
            </p>
            <p>
                <a href="{{ route('questions.index')}}" class='btn btn-primary btn-lg' role='button'>Ask Now</a>
            </p>
        </div>

        <h2>
            Recent Questions: 
        </h2>
        </div>

@endsection
        
           
