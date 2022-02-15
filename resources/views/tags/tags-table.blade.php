@extends('layouts.maps')

@section('styles')
<style type="text/css">
    .table>tbody>tr>td, .table>tfoot>tr>td {
        padding: 8px;
        line-height: 2;
        vertical-align: top;
        border-top: 1px solid #ddd;
    }
</style>
@endsection

@section('content')    
    <h1 class="margin-top-0 margin-bottom-30" style="font-size: 3rem">
        Listing Tags
    </h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="listings-container list-layout table-responsive">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            @foreach($tags as $tag)
                                <th>{{ $tag->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($tags as $tag)
                                <td>
                                    @foreach($tag->items as $item)
                                        
                                        <li>{{ $item->name }}</li>
                                        
                                    @endforeach
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

@endsection

@section('scripts')
    <script type="text/javascript">
        
    </script>
@endsection
