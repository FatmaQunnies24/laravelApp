<!-- resources/views/causes/index.blade.php -->

@extends('layouts.auth')

@section('content')
<div class="causes-container">
    @foreach ($causes as $cause)
        <div class="single_cause" key="{{ $cause['id'] }}">
            <div class="thumb">
                <img src="{{ asset($cause['imgUrl']) }}" alt=""/>
            </div>
            <div class="causes_content">
                <div class="custom_progress_bar">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ $cause['pre'] }};" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progres_count">
                                {{ $cause['pre'] }}
                            </span>
                        </div> 
                    </div>
                </div>
                <div class="balance d-flex justify-content-between align-items-center">
                    <span>{{ $cause['raised'] }}</span>
                    <span>{{ $cause['goal'] }}</span>
                </div>
                <h4>{{ $cause['name'] }}</h4>
                <p>{{ $cause['smallDisc'] }}</p>
                <a href="{{ url('/read_more_causes') }}" class="read_more" style="margin-left: 0;">
                    Read More
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
