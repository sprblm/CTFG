@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-12 margin-bottom-40">
            <h2>Search Log</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 padding-right-30">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        @if($logs->count() > 0)
                            <ul>
                                @foreach($logs as $log)
                                    <li class="pending-booking">
                                        <a href="/listings/search?q={{ $log->item }}">
                                            <div class="list-box-listing bookings">
                                                <div class="list-box-listing-content">
                                                    <div class="inner">
                                                        <h3>{{ $log->item }}</h3>
                                                        <div class="inner-booking-list">
                                                            <h5 style="font-weight: normal;">Last Time Searched:</h5>
                                                            <ul class="booking-list">
                                                                <li class="highlighted">{{ $log->updated_at }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="inner-booking-list">
                                                            <h5 style="font-weight: normal;">Last Search Results:</h5>
                                                            <ul class="booking-list">
                                                                <li>{{ $log->last_search_results_count }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="inner-booking-list">
                                                            <h5 style="font-weight: normal;">Total Search Results:</h5>
                                                            <ul class="booking-list">
                                                                <li>{{ $log->total_results_count }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Search log not yet available :-(</p>
                        @endif
                    </div>

                </div>

                <div class="col-lg-12 col-md-12">
                    {{ $logs->links() }}
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection