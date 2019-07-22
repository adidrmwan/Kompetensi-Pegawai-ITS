@extends('layouts.default')

@section('content')

    <div class="mB-20">
        <a href="{{ route('topic.create') }}" class="btn btn-info">
            <h5>Add Topic +</h5>
        </a>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Topic</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allTopic as $key => $topic)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$topic->title}}</td>
                    <td>
                        <form method="post" action="{{ route('question.create', ['topic' => $topic->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button class="btn btn-info" data-toggle="tooltip" data-placement="right" ">
                                Add question
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection