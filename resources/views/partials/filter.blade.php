<div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
    <div style="display: flex;" >
        <select id="listeDeroulante" name="objet" onchange="window.location.href=this.value" style="border-radius: 10px; border: 2px solid black; background-color: #E8E8E8;">
            <option value="/"> No filter </option>
            @foreach($rejectTags as $tag)
                <option value="/?tag={{ $tag->slug }}" style="background-color: white; color: black; border-radius: 3px;" {{ request('tag') == $tag->slug ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
        <div style="display: flex; align-items: center; margin-left: 15px;">
            <input type="checkbox" name="withIncident" id="withIncident" style="margin-top: 0;" {{ request()->has('withIncident') ? 'checked' : '' }} onclick="saveCheckboxState()">
            <label for="" style="margin-bottom: -3px; margin-left: 10px; padding-bottom: 3px">apply filter on incidents ?</label>
        </div>
    </div>
    <div class="calendar-wrapper">
        <div id="calendar"></div>
    </div>
    <div>
        <button id="captureButton" class="viewButton">Operation Planned</button>
        <a class="btn btn-link" href="{{ cachet_route('dashboard') }}" title="accéder au dashboard"><img width="32" height="32" src="https://img.icons8.com/windows/32/settings--v1.png" alt="settings--v1"/></a>
        <div id="customButtons" style="margin-top: 10px; margin-bottom: 10px;">
            <button id="filterAllButton" class="btn">All Events</button>
            <button id="filterUnstableButton" class="btn">Unstable Events</button>
        </div>
    </div>
</div>



