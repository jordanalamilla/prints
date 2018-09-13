@extends( 'layouts/app' )

@section( 'content' )

<!--INTRO-->
<div class="light">
        
    <main class="padding">

        <div class="container">

            <!--HEADING-->
            <div class="space">
                <h1>Projects</h1>
            </div>

            <!--PROJECT TABLE-->
            <table class="space" id="dashboard">

                <!--IF NO PROJECTS-->
                @if( !count( $projects ) )

                    <tr>
                        <td class="space">No projects available.</td>
                    </tr>

                @else

                    @foreach( $projects as $project )

                        <tr>

                            <!--TITLE-->
                            <td class="dashboard-title"><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>

                            <!--EDIT-->
                            <td class="dashboard-edit">
                                <a href="/projects/{{ $project->id }}/edit">Edit</a>
                            </td>

                            <!--DELETE-->
                            <td class="dashboard-delete">

                                {!! Form::open( [ 'action' => [ 'ProjectsController@destroy', $project->id ] ] ) !!}
                                    {!! Form::hidden( '_method', 'DELETE') !!}
                                    {!! Form::submit( '×' ) !!}
                                {!! Form::close() !!}

                            </td>

                        </tr>
                        
                    @endforeach

                @endif

            </table>

            <div class="space">
                <a class="red button"
                href="/projects/create">Add New Project</a>
            </div>

        </div>

    </main>

</div>

@endsection