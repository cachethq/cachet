<div class="header sub-header">
    <span class="uppercase">
        <i class="icons ion-flash"></i> {{ trans('dashboard.notifications.twilio.twilio_configuration') }}
    </span>
    <div class="clearfix"></div>
</div>
<div class='content-wrapper'>
    <div class='row'>
        <form id="twilio_notification" name="TwilioSettings" class="form-vertical" role="form" action="/dashboard/notifications/twilio" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>{{ trans('dashboard.notifications.twilio.account_id') }}</label>
                            <input type="text" class="form-control" name="account_id" value={{ $properties->account_id }} required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>{{ trans('dashboard.notifications.twilio.token') }}</label>
                            <input type="text" class="form-control" name="token" value={{ $properties->token }} required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>{{ trans('dashboard.notifications.twilio.from') }}</label>
                            <input type="text" class="form-control" name="from" value={{ $properties->from }} required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>{{ trans('dashboard.notifications.twilio.to') }}</label>
                            <input type="text" class="form-control" name="to" value={{ $properties->to }} required />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class='form-group'>
                            <label class='checkbox-inline'>
                                <input type="checkbox" name="active" value="1" {{ ($active == 1) ? "checked" : "" }} /> {{ trans('dashboard.notifications.active') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
