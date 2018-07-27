@extends( 'layouts/app' )

@section( 'content' )

    <table id="dashboard">

        <thead>
            <th><h2>Projects</h2></th>    
        </thead>

        @foreach( $projects as $project )

            <tr>
                <td class="dashboard-title"><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>
                <td class="dashboard-edit">
                    <a href="/projects/{{ $project->id }}/edit">Edit</a>
                </td>
                <td class="dashboard-delete">
                    {!! Form::open( [ 'action' => [ 'ProjectsController@destroy', $project->id ] ] ) !!}
                        {!! Form::hidden( '_method', 'DELETE') !!}
                        {!! Form::submit( 'x' ) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            
        @endforeach

    </table>

    <a class="button"
       href="/projects/create">Add New Project</a>

@endsection