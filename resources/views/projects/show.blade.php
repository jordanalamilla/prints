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
            <img class="shadow"
                 src="/img/projects/full/{{ $project->image }}"
                 alt="{{ $project->title }} by Jordan Alamilla" />
        </div>

        <!--PRINT DETAILS-->
        <div id="project-print-details">
            {{ $project->print_size }} : ${{ money_format('%i', $project->print_price ) }}
        </div>

        <!--ADD TO CART-->
        <div id="project-add-to-cart">
            <button>Add To Cart</button>
        </div>

    </div>

@endsection