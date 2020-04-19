@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List All Notes</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">create
                        note
                    </button>
                    <div class="card-body">
                        @include('messages.error')
                        @include('messages.success')
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">title</th>
                                <th scope="col">body</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notes as $index=>$note)
                                <tr>
                                    <th scope="row">{{$index +1}}</th>
                                    <td>{{$note->title}}</td>
                                    <td>{{$note->body}}</td>
                                    <td>@include('notes.partials.buttons')</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$notes->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal create -->
@include('notes.create')

