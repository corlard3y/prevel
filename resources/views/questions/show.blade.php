@include('template')

<div class='container' style='margin-top:2em'>
     <h1>{{  $question->title }}</h1>
     <p class='lead'>
     {{ $question->description }}
     </p>
     <p>Submitted by {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}</p>

     <hr />

     @if ($question->answers->count() > 0)

     <!-- display all of answers for this question -->
     @foreach ($question->answers as $answer)
         <div class="panel panel-default">
              <div class="panel-body">
                    <p>{{ $answer->content }}</p>
                    <p>Answered by {{ $answer->user->name }} , {{ $answer->created_at->diffForHumans() }}</p>
              </div>
         </div>
     
     @endforeach
     @else 
         <p>
              No answers yet.....
         </p>
     @endif

         <hr>

          <!-- display the form for these question -->
          <form action="{{ route('answers.store') }}" method="POST">
               {{ csrf_field() }}
     
     
               <h4>Submit your own answer:</h4>
               <textarea class="form-control" name='content' rows='4'></textarea>
               <input type="hidden" value="{{ $question->id }}" name="question_id" />
               <input type="submit" class="btn btn-primary btn-sm" value="Submit Answer"  style="margin-top:2em"/>
          </form>
     
</div>



     