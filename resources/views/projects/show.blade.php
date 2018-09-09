@extends( 'layouts/app' )

@section( 'content' )

    {{-- <div id="project">

        <!--IMAGE-->
        <div id="project-image">
            <img class="print-shadow"
                 src="/storage/img/projects/full/{{ $project->image }}"
                 alt="{{ $project->title }} by Jordan Alamilla" />
        </div>

        <!--TITLE-->
        <div id="project-title"><h2>{{ $project->title }}</h2></div>

        <!--DESCRIPTION-->
        <div id="project-description">{!! $project->description !!}</div>

        <!--SIGNATURE-->
        <div id="project-signature">
            <img src="/img/signature-invert.png"
                 alt="{{ $project->title }} by Jordan Alamilla" />
        </div>

    </div> --}}




    <!--PRINT-->
    <div class="light">
        
        <main class="page-high">
        
            <div class="container" id="print">
            
                <!--IMAGE-->
                <div class="right space two-third" id="print-image">
                
                    <img class="shadow untouchable"
                            src="/storage/img/projects/full/{{ $project->image }}"
                            alt="{{ $project->title }}"
                            title="{{ $project->title }}">
                
                </div>
            
                <!--DETAILS-->
                <div class="left space third untouchable" id="print-details">
                
                    <!--TITLE-->
                    <h1 id="print-title">{{ $project->title }}</h1>
                    
                    <!--ARTST-->
                    <p class="grey-text" id="print-artist">By Jordan Alamilla</p>
                    
                    <!--EXTRA CREDS-->
                    <p class="grey-text" id="print-creds">Photography by Sarah Rose</p>
                    
                    <!--DESCRIPTION-->
                    <div class="grey-text" id="print-description">{!! $project->description !!}</div>
                    
                    <!--SIGNATURE-->
                    <img class="untouchable"
                            id="print-signature"
                            src="/img/signature-black.png"
                            alt="Jordan Alamilla's signature">
                    
                    <!--INFO-->
                    <ul id="print-info">
                    
                        <li>Print of a charcoal drawing</li>
                        <li>11 &times; 15 inches</li>
                        <li>$50.00</li>
                    
                    </ul>
                    
                    <!--ADD TO CART-->
                    <a class="button" href="#">add to cart</a>
                
                </div>
            
            </div>
        
        </main>
        
    </div>

@endsection