@if ($status === 'Active')
    <button class="btn btn-success">{{$status}}</button>
@else
    <button class="btn btn-warning">{{$status}}</button>
@endif
