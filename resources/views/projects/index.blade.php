@extends( 'layouts/app' )

@section( 'content' )

    <!--INTRO-->
    <div class="light">
            
        <header class="untouchable padding">

            <div class="container">

                <h1 class="space">The<br>Artwork of<br>Jordan Alamilla</h1>

                <p class="space grey-text">Hi, I’m Jordan. I’m a web developer living and working in the Greater Toronto Area (GTA) of Ontario, Canada. When I’m not working on websites, I like to draw. On this website, you can view my work and also order prints. All prints from this site are signed by me with my gold Sharpie. Fancy, I know. You can also send me a message and we can discuss purchasing my original drawings. Heads up, they are a lot more expensive than prints and at the present time, I only deliver originals to residents of the GTA. Thanks for the visit and enjoy.</p>

            </div>

        </header>
        
    </div>

    <!--GALLERY-->
    <div class="light" id="prints">
        
        <main class="padding">

            <div class="container">

                @if( !count( $projects ) )
                    <p class="space">No projects available.</p>

                @else

                    @foreach( $projects as $project )

                        <!--PRINT-->
                        <a href="/projects/{{ $project->id }}">

                            <div class="third left space gallery-print">

                                <img class="shadow untouchable"
                                        src="storage/img/projects/thumb/{{ $project->image }}"
                                        alt="{{ $project->title }}"
                                        title="{{ $project->title }}">
                            </div>

                        </a>

                    @endforeach

                @endif

            </div>

        </main>

    </div>

@endsection