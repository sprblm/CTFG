@extends('layouts.template')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 margin-bottom-40">
            <h2>Search Log</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="margin-top-0">
                        <?php $count = 1; ?>
                        @if($logs->count() > 0)
                            <table id="search-log-table" class="display" style="color: #444;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Times Searched</th>
                                        <th>Last Searched</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logs as $log)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <a href="/listings/search?q={{ $log->item }}">
                                                <td>{{ $log->item }}</td>
                                            </a>
                                            <td>{{ $log->times_searched }}</td>
                                            <td>{{ $log->created_at }}</td>

                                        </tr>
                                        @php $count += 1; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Search log not yet available :-(</p>
                        @endif
                    </div>

                </div>

                {{-- <div class="col-lg-12 col-md-12">
                    {{ $logs->links() }}
                </div> --}}

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#search-log-table').DataTable({
                searching: false,
                paging: false,
                bPaginate: true,
            });
        });
    </script>
@endsection
