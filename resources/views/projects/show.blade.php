@extends( 'layouts/app' )

@section( 'content' )

    <ul id="project">

        <!--TITLE-->
        <li id="project-title">{{ $project->title }}</li>

        <!--DESCRIPTION-->
        <li id="project-description">{{ $project->description }}</li>

        <!--SIGNATURE-->
        <li id="project-signature">
            <img src="/img/signature.png"
                    alt="{{ $project->title }} by Jordan Alamilla" />
        </li>

        <!--IMAGE-->
        <li id="project-image">
            <img src="/img/projects/thumb/{{ $project->image }}"
                    alt="{{ $project->title }} by Jordan Alamilla" />
        </li>

        <!--PRINT DETAILS-->
        <li id="project-print-details">
            {{ $project->print_size }} : ${{ money_format('%i', $project->print_price ) }}
        </li>

        <!--ADD TO CART-->
        <li id="project-add-to-cart">
            <button>Add To Cart</button>
        </li>
    </ul>

@endsection