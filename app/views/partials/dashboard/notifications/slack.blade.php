<h4>{{ trans('dashboard.notifications.slack.slack_configuration') }}</h4>
<form id="slack_notification" name="SlackSettings" class="form-vertical" role="form" action="/dashboard/notifications/slack" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.slack.slack_endpoint') }}</label>
                    <input type="text" class="form-control" name="endpoint" value={{$properties->endpoint }} required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.slack.slack_channel') }}</label>
                    <input type="text" class="form-control" name="channel" value={{$properties->channel }}  required />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>{{ trans('dashboard.notifications.slack.slack_botname') }}</label>
                    <input type="text" class="form-control" name="username" value={{$properties->username }}  required />
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
