@include('template')

<div class='container' style="margin-top: 2em;color:gray">
    <h1>Ask a Question</h1>
    <hr>

    <form action="{{ route('questions.store') }}" method="POST">
            {{ csrf_field() }}
            <label for="title">Question:</label>
            <input type="text" name="title" id="title" class="form-control"/>

            <label for="description" style="margin-top: 1em">More Information:</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>

            <input type="submit" class="btn btn-primary"  style="margin-top: 2em" value="Submit Question"/>

    </form>
</div>