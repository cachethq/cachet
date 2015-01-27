<!-- First time welcome Modal -->
<div class="modal fade" id="welcome-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <header>
                    {{ trans('dashboard.welcome.welcome') }}
                </header>

                <p>
                    {{ trans('dashboard.welcome.message') }}
                </p>

                <div class="get-started">
                    <div class="row">
                        <div class="col-md-4 animated fadeInDown">
                            <i class="icon ion-outlet"></i>
                            <a href="{{ route('dashboard.components.add') }}">
                                {{ trans('dashboard.welcome.steps.component') }}
                            </a>
                        </div>
                        <div class="col-md-4 animated fadeInDown two">
                            <i class="icon ion-android-alert"></i>
                            <a href="{{ route('dashboard.incidents.add') }}">
                                {{ trans('dashboard.welcome.steps.incident') }}
                            </a>
                        </div>
                        <div class="col-md-4 animated fadeInDown three">
                            <i class="icon ion-ios-paper-outline"></i>
                            <a href="{{ route('dashboard.settings.theme') }}">
                                {{ trans('dashboard.welcome.steps.customize') }}
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animated fadeInDown">
                            <i class="icons ion-ios-people"></i>
                            <a href="{{ route('dashboard.team.add') }}">
                                {{ trans('dashboard.welcome.steps.team') }}
                            </a>
                        </div>
                        <div class="col-md-4 animated fadeInDown two">
                            <i class="icon ion-code-working"></i>
                            <a href="{{ route('dashboard.user') }}">
                                {{ trans('dashboard.welcome.steps.api') }}
                            </a>
                        </div>
                        <div class="col-md-4 animated fadeInDown three">
                            <i class="icon ion-unlocked"></i>
                            <a href="{{ route('dashboard.user') }}">
                                {{ trans('dashboard.welcome.steps.two-factor') }}
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" data-dismiss="modal" class="go-dashboard">
                    {{ trans('dashboard.welcome.close') }}
                    <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
