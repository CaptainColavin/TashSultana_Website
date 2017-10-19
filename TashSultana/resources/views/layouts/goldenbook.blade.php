@extends('layouts.app')

@section('content')
<h1>Guestbook</h1>

<div class="table-responsive">
    <table class="table table-spacing">
      <thead style="background-color: #DCDCDC; color: black;">
        <tr>
            <th>User</th>
            <th>Comment</th>
        </tr>
      </thead>
      <tbody style="overflow-y: scroll;">
        @foreach($goldenbook as $comment)

          <tr class="table-color my_table-border">
            <td style="width:20%;"><div class="user-name">{{ $comment->user->name }}</div>
            <div class="user-date">{{ $comment->date }}</div></td>
            <td class="user-comment"><div class="scroll-comment">{{ $comment->text }}</div></td>
          </tr>

        @endforeach
      </tbody>
    </table>
</div>
@if (Auth::check())
    <form action="/guestbook" method="POST">
        {{csrf_field()}}
        <label for="text">Comment :</label>
        <textarea  class="form-control comment-text-area" id="textArea" name="text" rows="5" required></textarea>

        <button type="submit" class="btn"> <span class="glyphicon glyphicon-send btn-icon"></span>Submit</button>
    </form>
@else
    <p>Please login to post a comment.</p>
@endif

@stop
