<h4>{{ trans('dashboard.notifications.twilio.twilio_configuration') }}</h4>
<form id="twilio_notification" name="TwilioSettings" class="form-vertical" role="form" action="/dashboard/notifications/twilio" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.twilio.account_id') }}</label>
                    <input type="text" class="form-control" name="account_id" value={{$properties->account_id}} required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.twilio.token') }}</label>
                    <input type="text" class="form-control" name="token" value={{$properties->token}} required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.twilio.from') }}</label>
                    <input type="text" class="form-control" name="from" value={{$properties->from }} required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.twilio.to') }}</label>
                    <input type="text" class="form-control" name="to" value={{$properties->to }} required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <input type="checkbox" class="" name="active" value="1"
                    {{ ($active == 1) ? "checked" : "" }} /> {{ trans('dashboard.notifications.active') }}
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
