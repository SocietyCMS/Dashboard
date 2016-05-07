@extends('layouts.master')

@section('title')
    {{ trans('dashboard::dashboard.name') }}
@endsection

@section('subTitle')
    {{ trans('dashboard::dashboard.subtitle') }}
@endsection

@section('content')

    <div class="ui raised blue very padded stacked segment" >
        <div class="ui middle aligned grid">
            <div class="four wide column">
                <img src="{!! Theme::url('/images/slant.png') !!}" class="ui centered small image">
            </div>
            <div class="twelve wide column">
                <h1 class="ui header" style="font-size: 5rem;">
                    {{ lang_replace(Setting::get('dashboard::welcome-message'), [
                    'user' => $currentUser->present()->fullname,
                    'firstname' => $currentUser->first_name,
                    ]) }}
                    <div class="sub header" style="font-size: 1.242857rem;">
                        {{ Setting::get('dashboard::welcome-subtitle') }}
                    </div>
                </h1>
            </div>
        </div>
    </div>

    @include('dashboard::backend.partials.timeline')

    <div id='calendar'></div>

@endsection
