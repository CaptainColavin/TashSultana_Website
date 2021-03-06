@extends('layouts.app')

@section('content')

<h1>Tours</h1>
<div class="table-responsive">
    <table class="table table-striped table-data">
      <thead style="background-color: #DCDCDC; color: black;">
        <tr>
            <th>Place</th>
            <th>City</th>
            <th>Time</th>
            <th>Purchase</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($tours as $key => $value) { $date = new DateTime($value->start->datetime); $date = $date->format('Y-m-d H:i');?>
        <tr>
        <td><?= $value->venue->displayName ?></td>
        <td><?= $value->location->city ?></td>
        <td><?= $date ?></td>
        <td><a href="<?= $value->uri ?>" target="_blank">Buy Ticket</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
<a href="https://www.songkick.com/" target="_blank"><img src="powered-by-songkick-white.png" class="songkick-logo" style="float: right;"></a>

@stop
