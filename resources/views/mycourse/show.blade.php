@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">mycourse {{ $mycourse->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('mycourse/' . $mycourse->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit mycourse"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['mycourse', $mycourse->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete mycourse',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mycourse->id }}</td>
                                    </tr>
                                    <tr><th> Userid </th><td> {{ $mycourse->userid }} </td></tr><tr><th> Titlt </th><td> {{ $mycourse->titlt }} </td></tr><tr><th> Description </th><td> {{ $mycourse->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection