@extends( 'layouts/app' )

@section( 'content' )

    <div id="project">

        <!--TITLE-->
        <div id="project-title"><h2>{{ $project->title }}</h2></div>

        <!--DESCRIPTION-->
        <div id="project-description">{{ $project->description }}</div>

        <!--SIGNATURE-->
        <div id="project-signature">
            <img src="/img/signature.png"
                 alt="{{ $project->title }} by Jordan Alamilla" />
        </div>

        <!--IMAGE-->
        <div id="project-image">
            <img class="print-shadow"
                 src="/img/projects/full/{{ $project->image }}"
                 alt="{{ $project->title }} by Jordan Alamilla" />
        </div>

        {{-- <!--PRINT DETAILS-->
        <div id="project-cart">

            <div id="project-print-details">
                <p>Signed Print</p>
                <p>{{ $project->print_size }} : ${{ money_format('%i', $project->print_price ) }}</p>
            </div>

            <!--ADD TO CART-->
            <div id="project-add-to-cart">

                {!! Form::open( [ 'action' => [ 'CartController@add', $project ] ] ) !!}
                    {!! Form::submit( 'Add To Cart' ) !!}
                {!! Form::close() !!}
                
            </div>
        </div> --}}

    </div>

@endsection