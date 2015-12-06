@if($groupedActivities->count() > 0)
    <div class="ui segment">
        <div class="ui large feed">

            @foreach($groupedActivities as $date => $activities)
                    @include('dashboard::backend.partials.timeline.items')
            @endforeach

        </div>
    </div>
@endif
