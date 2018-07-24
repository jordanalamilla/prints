@extends( 'layouts/app' )

@section( 'content' )

    <a href="/projects/create">Add New Project</a>

    <div id="gallery">

        @foreach( $projects as $project )

            <a href="/projects/{{ $project->id }}">
                
                <!--TITLE-->
                <div class="project-title">{{ $project->title }}</div>

                <!--IMAGE-->
                <div class="project-image">
                    <img src="img/projects/thumb/{{ $project->image }}"
                        alt="{{ $project->title }} by Jordan Alamilla" />
                </div>

            </a>
        @endforeach
    </div>

@endsection