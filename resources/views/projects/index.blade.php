@extends( 'layouts/app' )

@section( 'content' )

    <div id="gallery">

        @foreach( $projects as $project )

            <a href="/projects/{{ $project->id }}">

                <!--PROJECT-->
                <div class="gallery-project">

                    <!--TITLE-->
                    <div class="gallery-project-title">{{ $project->title }}</div>

                    <!--IMAGE-->
                    <img src="storage/img/projects/thumb/{{ $project->image }}"
                         alt="{{ $project->title }} by Jordan Alamilla" />
                </div>

            </a>
        @endforeach
    </div>

@endsection