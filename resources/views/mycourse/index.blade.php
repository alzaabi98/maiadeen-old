@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mycourse</div>
                    <div class="panel-body">

                        <a href="{{ url('/mycourse/create') }}" class="btn btn-primary btn-xs" title="Add New mycourse"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Userid </th><th> Titlt </th><th> Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mycourse as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->userid }}</td><td>{{ $item->titlt }}</td><td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('/mycourse/' . $item->id) }}" class="btn btn-success btn-xs" title="View mycourse"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/mycourse/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit mycourse"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/mycourse', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete mycourse" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete mycourse',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $mycourse->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection