<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test comment</title>
</head>
<body>

  <center><h1>Golden Book</h1></center>
  <table>
    <thead>
      <tr>
        <th>Comment</th>
        <th>Date</th>
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
        {{ $comment->user_id}}
    </tr>
    @endforeach
    </tbody>
  </table>

  <form action="/goldenbook" method="POST">
    {{csrf_field()}}
    <div>
      <label for="text">Comment:</label>
      <textarea id="textArea" name="text" rows="5"></textarea>
    </div>
    <br>
    <button type="submit">Submit</button>
  </form>

</body>
</html>