<nav>
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><b>Laravel Answers</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('questions.index')}}">Questions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Popular</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('questions.create') }}" tabindex="-1">Ask a Question</a>
        </li>
        </ul>
        </nav>
