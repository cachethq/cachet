<h4>{{ trans('dashboard.notifications.twilio.twilio_configuration') }}</h4>
<form id="twilio_notification" name='TwilioSettings' class='form-vertical' role='form' action='/dashboard/notifications/twilio' method='POST' enctype="multipart/form-data">
    <fieldset>
        <div class='row'>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.twilio_sid') }}</label>
                    <input type='text' class='form-control' name='twilio_sid' value='' required />
                </div>
            </div>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.twilio_token') }}</label>
                    <input type='text' class='form-control' name='twilio_token' value='' required />
                </div>
            </div>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.twilio.twilio_from') }}</label>
                    <input type='text' class='form-control' name='twilio_from' value='' required />
                </div>
            </div>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.twilio.twilio_to') }}</label>
                    <input type='text' class='form-control' name='twilio_to' value='' required />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>