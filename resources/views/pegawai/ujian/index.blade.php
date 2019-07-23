@extends('pegawai.layouts.default-ujian')

@section('content')
<div class="quiz-container" id="quiz">
        <h1 class="quiz-name" id="quiz-name"></h1>
        <button id="submit-button">Submit Answers</button>
        <button id="next-question-button">Next Question</button>
        <button id="prev-question-button">Previous</button>
        
        <div class="quiz-results" id="quiz-results">
          <p id="quiz-results-message"></p>
          <p id="quiz-results-score"></p>
          <button id="quiz-restart-button"></button>
        </div>
      </div>

@endsection