@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.bookings.title')</h3>


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }} @can('booking_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('booking_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.bookings.fields.ticket_number')</th>
                        <th>@lang('quickadmin.bookings.fields.event')</th>
                        <th>@lang('quickadmin.bookings.fields.user')</th>
                        <th>@lang('quickadmin.bookings.fields.type')</th>
                        <th>@lang('quickadmin.bookings.fields.quantity')</th>
                        <th>@lang('quickadmin.bookings.fields.amount')</th>
                        <th>@lang('quickadmin.bookings.fields.phone_number')</th>
                        <th>@lang('quickadmin.bookings.fields.mpesa_code')</th>
                        <th>@lang('quickadmin.bookings.fields.status')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($bookings) > 0)
                        @foreach ($bookings as $booking)
                            <tr data-entry-id="{{ $booking->id }}">
                                @can('booking_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $booking->ticket_number }}</td>
                                <td>{{ $booking->event->title }}</td>
                                <td>{{ $booking->user->email }}</td>
                                <td>{{ $booking->type->title }}</td>
                                <td>{{ $booking->ticket_quantity }}</td>
                                <td>{{ $booking->amount }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->mpesa_code }}</td>
                               @if($booking->confirmed)
                              <td><span class="btn btn-success btn-xs">Paid</span></td>
                              @else
                              <td><span class="btn btn-danger btn-xs">Unpaid</span></td>
                              @endif

                                <td>
                                    @can('booking_view')
                                    <a href="{{ route('admin.bookings.show',[$booking->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('ticket_edit')
                                    <a href="{{ route('admin.bookings.edit',[$booking->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('ticket_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.bookings.destroy', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('booking_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.bookings.mass_destroy') }}';
        @endcan

    </script>
@endsection