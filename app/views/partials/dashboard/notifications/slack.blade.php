<h4>{{ trans('dashboard.notifications.slack.slack_configuration') }}</h4>
<form id="slack_notification" name='SlackSettings' class='form-vertical' role='form' action='/dashboard/notifications/slack' method='POST' enctype="multipart/form-data">
    <fieldset>
        <div class='row'>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.slack.slack_webhookurl') }}</label>
                    <input type='text' class='form-control' name='slack_webhookurl' value='' required />
                </div>
            </div>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.slack.slack_channel') }}</label>
                    <input type='text' class='form-control' name='slack_channel' value='' required />
                </div>
            </div>
            <div class='col-xs-12'>
                <div class='form-group'>
                    <label>{{ trans('dashboard.notifications.slack.slack_botname') }}</label>
                    <input type='text' class='form-control' name='slack_botname' value='' required />
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