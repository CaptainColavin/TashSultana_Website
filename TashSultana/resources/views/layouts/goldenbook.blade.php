@extends('layouts.app')

@section('content')
  <table>
    <thead>
      <tr>
        <th>Comment</th>
        <th>Date</th>
        <th>User</th>
      </tr>
    </thead>
    <tbody>
    @foreach($goldenbook as $comment)
    <tr>
      <td>
        {{ $comment->text }}
      </td>
      <td>
        {{ $comment->date }}
      </td>
      <td>
        {{ $comment->user->name }}
    </tr>
    @endforeach
    </tbody>
  </table>

  @if (Auth::check())
    <form action="/goldenbook" method="POST">
      {{csrf_field()}}
      <div>
        <label for="text">Comment:</label>
        <textarea id="textArea" name="text" rows="5"></textarea>
      </div>
      <br>
      <button type="submit">Submit</button>
    </form>
  @else
    <p>Please login to post a comment.</p>
  @endif

@stop