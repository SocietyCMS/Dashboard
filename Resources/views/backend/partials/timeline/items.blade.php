@foreach($activities as $activity)

        <?php $activityTypeView = str_contains($activity->template, '::') ? "{$activity->template}.{$activity->name}" : "dashboard::backend.partials.timeline.types.{$activity->name}" ?>

        @if(View::exists($activityTypeView) && !is_null($activity->subject))
            @include($activityTypeView)
        @endif

@endforeach