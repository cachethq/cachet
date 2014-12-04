<div class="sidebar active">
    <div class="profile">
        <div class="avatar pull-left">
            <a href="#">
                <img src="{{ Auth::user()->gravatar }}" alt="">
            </a>
        </div>
        <div class="profile pull-left">
            <div class="username">{{ Auth::user()->username }}</div>
        </div>
    </div>
    <ul>
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa fa-list-ul"></i> Components</a></li>
        <li class="active"><a href="#"><i class="fa fa-exclamation-triangle"></i> Incidents</a></li>
        <li><a href="#"><i class="fa fa-area-chart"></i> Metrics</a></li>
        <li><a href="#"><i class="fa fa-exclamation-circle"></i> Status Page</a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
    </ul>
</div>
