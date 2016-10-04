<div class="modal fade" tabindex="-1" role="dialog" id="subscribe-modal">
    <div class="modal-dialog">
        <form action="{{ route("subscribe.subscribe") }}" method="post" class="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ trans("cachet.modal.subscribe.title") }}</h4>
                </div>
                <div class="modal-body">
                        <p>{{ trans("cachet.modal.subscribe.body") }}</p>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="hello@alt-three.com">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans("cachet.modal.close") }}</button>
                    <button type="submit" class="btn btn-success">{{ trans("cachet.modal.subscribe.button") }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
