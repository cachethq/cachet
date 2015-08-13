@if ($errors->any())
  @include('dashboard.partials._error', ['level' => 'danger', 'title' => Session::get('title'), 'message' => $errors->all(':message')])
@endif

@if ($message = Session::get('success'))
  @include('dashboard.partials._error', ['level' => 'success', 'title' => Session::get('title'), 'message' => $message])
@endif

@if ($message = Session::get('warning'))
  @include('dashboard.partials._error', ['level' => 'warning', 'title' => Session::get('title'), 'message' => $message])
@endif

@if ($message = Session::get('info'))
  @include('dashboard.partials._error', ['level' => 'info', 'title' => Session::get('title'), 'message' => $message])
@endif
