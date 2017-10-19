@extends('layouts.app')

@section('content')
<h1>Guestbook</h1>
<div class="comment-container">
    @if (count($goldenbook) > 0)
    <table class="table">
        <thead>
            <tr>
                <th class="title-user">User</th>
                <th class="title-comment">Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($goldenbook as $comment)
            <tr>
                <td class="user-infos">
                    <div class="user-name">{{ $comment->user->name }}</div>
                    <div class="user-date">{{ $comment->date }}</div>
                </td>
                <td class="user-comment">
                    {{ $comment->text }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <div class="no-comment"> <span class="glyphicon glyphicon-thumbs-up"></span> Be the first to write a comment ! </div>
    @endif
</div>
@if (Auth::check())
    <form action="/guestbook" method="POST">
        {{csrf_field()}}
        <label for="text">Comment :</label>
        <textarea class="form-control comment-text-area" id="textArea" name="text" rows="5"></textarea>

        <button type="submit" class="btn"> <span class="glyphicon glyphicon-pencil btn-icon"></span>Submit</button>
    </form>
@else
    <p>Please login to post a comment.</p>
@endif

@stop
