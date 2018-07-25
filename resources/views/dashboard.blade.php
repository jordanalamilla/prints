@extends( 'layouts/app' )

@section( 'content' )

    <a href="/projects/create">Add New Project</a>

    <table>

        <thead>
            <th>Projects</th>    
        </thead>

        @foreach( $projects as $project )

            <tr>
                <td><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>
                <td>
                    <a href="/projects/{{ $project->id }}/edit">Edit</a>
                </td>
                <td>
                    {!! Form::open( [ 'action' => [ 'ProjectsController@destroy', $project->id ] ] ) !!}
                        {!! Form::hidden( '_method', 'DELETE') !!}
                        {!! Form::submit( 'Delete' ) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            
        @endforeach

    </table>

@endsection