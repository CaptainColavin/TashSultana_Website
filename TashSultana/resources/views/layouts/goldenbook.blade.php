@extends('layouts.app')

@section('content')
<h1>Golden Book</h1>
<div class="table-responsive">
  <table class="table table-striped table-data">
    <thead style="background-color: #DCDCDC; color: black;">
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
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>

  @if (Auth::check())
      <form action="/goldenbook" method="POST">
      {{csrf_field()}}
      <label for="text">Comment :</label>
      <textarea class ="form-control" id="textArea" name="text" rows="5"></textarea>
    <br>
    <button type="submit" class="btn">Submit</button>
    </form>
  @else
    <p>Please login to post a comment.</p>
  @endif
</div>
@stop