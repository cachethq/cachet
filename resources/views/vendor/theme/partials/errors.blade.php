@if ($errors->any())
@include('theme::partials.error', ['level' => 'danger', 'title' => Session::get('title'), 'message' => $errors->all(':message')])
@endif

@if ($message = Session::get('success'))
@include('theme::partials.error', ['level' => 'success', 'title' => Session::get('title'), 'message' => $message])
@endif

@if ($message = Session::get('warning'))
@include('theme::partials.error', ['level' => 'warning', 'title' => Session::get('title'), 'message' => $message])
@endif

@if ($message = Session::get('info'))
@include('theme::partials.error', ['level' => 'info', 'title' => Session::get('title'), 'message' => $message])
@endif
