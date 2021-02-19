@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.bookings.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>


        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.event')</th>
                            <td>{{ $booking->event->title }}</td>
                        </tr>
                         <tr>
                        <th>@lang('quickadmin.bookings.fields.ticket_number')</th>
                        <td>{{ $booking->ticket_number }}</td>
                    </tr>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.first_name')</th>
                           <td>{{ $booking->first_name }}</td>
                        </tr>
                        <tr>
                        <th>@lang('quickadmin.bookings.fields.last_name')</th>
                       <td>{{ $booking->last_name }}</td>
                    </tr>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.type')</th>
                              <td>{{ $booking->type->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.quantity')</th>
                            <td>{{ $booking->ticket_quantity }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.amount')</th>
                              <td>{{ $booking->amount }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.bookings.fields.phone_number')</th>
                           <td>{{ $booking->phone_number }}</td>
                        </tr>
                         <tr>
                        <th>@lang('quickadmin.bookings.fields.physical_address')</th>
                       <td>{{ $booking->physical_address }}</td>
                    </tr>
                     <tr>
                    <th>@lang('quickadmin.bookings.fields.additional_info')</th>
                   <td>{{ $booking->additional_info }}</td>
                </tr>
                <tr>
                    <th>@lang('quickadmin.bookings.fields.status')</th>
                   @if($booking->confirmed)
                   <td><span class="btn btn-success btn-sm">Paid</span></td>
                   @else
                   <td><span class="btn btn-danger btn-sm">Unpaid</span></td>
                   @endif
                </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.bookings.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop