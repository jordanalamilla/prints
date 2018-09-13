@extends( 'layouts/app' )

@section( 'content' )

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
                    <p class="grey-text" id="print-creds">{{ ucfirst( $project->credits ) }}</p>
                    
                    <!--DESCRIPTION-->
                    <div class="grey-text" id="print-description">{!! $project->description !!}</div>
                    
                    <!--SIGNATURE-->
                    <img class="untouchable"
                            id="print-signature"
                            src="/img/signature-black.png"
                            alt="Jordan Alamilla's signature">
                    
                    <!--INFO-->
                    <ul id="print-info">
                    
                        <li>Print of a {{ $project->type }}</li>
                        <li>{{ $project->art_print->size }}</li>
                        <li>${{ money_format( '%i', $project->art_print->price ) }}</li>
                    
                    </ul>
                    
                    <!--ADD TO CART-->
                    {{-- <a class="green button" href="#">get print</a> --}}

                    <!--PAYPAL BUTTON-->
                    <div id="paypal-button-container"></div>
                    <script src="{{ asset('js/paypal.js') }}"></script>
                
                </div>
            
            </div>
        
        </main>
        
    </div>

@endsection