@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.bookings.title')</h3>
    <h3 class="page-title">Ticket Number : {{$booking->ticket_number}}</h3>

    {!! Form::model($booking, ['method' => 'PUT', 'route' => ['admin.bookings.update', $booking->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Additional Information', ['class' => 'control-label']) !!}
                    {!! Form::textarea('additional_info', old('additional_info'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('additional_info'))
                        <p class="help-block">
                            {{ $errors->first('additional_info') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('confirmed', 'Payment Confirmed*', ['class' => 'control-label']) !!}
                    @if($booking->confirmed)
                    <input type="checkbox" name="confirmed" checked>
                    @else
                    <input type="checkbox" name="confirmed" value="1">
                    @endif
                    <p class="help-block"></p>

                </div>
            </div>


            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

