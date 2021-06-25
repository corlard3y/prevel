@include('template')

<div class='container' style="margin-top:1em;margin-bottom:4em">
<h1>Recent Questions:</h1>
<hr />

@foreach ($questions as $question)
    <div class="well" style="margin-top:1em;background-color:#d8e2dc;padding:2rem;border-radius:0.5em">
        <h3>{{ $question->title }}</h3>

        <p>{{ $question->description}}</p>
        <a href="{{  route('questions.show',$question->id) }}" class="btn btn-primary btn-sm">View Details</a>
    </div>

@endforeach

<div class="" style="display: flex;justify-content:center;margin-top:2em">{{ $questions->links() }}</div>

</div>