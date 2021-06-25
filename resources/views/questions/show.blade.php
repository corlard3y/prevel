@include('template')

<div class='container' style='margin-top:2em'>
     <h1>{{  $question->title }}</h1>
     <p class='lead'>
     {{ $question->description }}
     </p>

     <hr />
</div>