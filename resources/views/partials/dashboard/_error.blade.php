<div class="alerts">
    <div class="alert alert-{{ $level }} alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
      @if(isset($title)) <h5>{!! $title !!}</h5> @endif
      @if(is_array($message))
      <ul class="list-unstyled">
      @foreach ($message as $msg)
          <li>{!! $msg !!}</li>
      @endforeach
      </ul>
      @else
        {!! $message !!}
      @endif
    </div>
</div>
