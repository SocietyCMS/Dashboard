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
                    {{ Setting::get('dashboard::welcome-message') }}
                    <div class="sub header" style="font-size: 1.242857rem;">
                        {{ Setting::get('dashboard::welcome-subtitle') }}
                    </div>
                </h1>
            </div>
        </div>
    </div>
<!--
    <div class="ui centered grid">
        <div class="ui"></div>

        <div class="ui red compact padded segment">
            <div class="ui red statistic">
                <div class="value">
                    <i class="users icon"></i> 5'198
                </div>
                <div class="label">
                    Visitors this Month
                </div>
            </div>
        </div>

        <div class="ui"></div>

        <div class="ui orange compact padded segment">
            <div class="ui orange statistic">
                <div class="value">
                    <i class="bar chart icon"></i> 56%
                </div>
                <div class="label">
                    Bounce Rate
                </div>
            </div>
        </div>

        <div class="ui"></div>

        <div class="ui blue compact padded segment">
            <div class="ui blue statistic">
                <div class="value">
                    <i class="newspaper icon"></i> 65
                </div>
                <div class="label">
                    Blog Posts
                </div>
            </div>
        </div>

        <div class="ui"></div>

        <div class="ui violet compact padded segment">
            <div class="ui violet statistic">
                <div class="value">
                    <i class="add user icon"></i>35
                </div>
                <div class="label">
                    User Registrations
                </div>
            </div>
        </div>

    </div>
-->
    @include('dashboard::backend.partials.timeline')


@endsection
