@extends( 'layouts/app' )

@section( 'content' )

<!--INTRO-->
<div class="light">
        
    <main class="padding">

        <div class="container">

            <form class="padding"
                  method="POST"
                  action="/projects"
                  enctype="multipart/form-data"
                  aria-label="{{ __('Create Project') }}">

                @csrf
    
                <!-- HEADING -->
                <div class="space">
                    <h1>Create Project</h1>
                </div>
    
                <!-- TITLE -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="title">Title</label>
    
                    <div>

                        <input id="title"
                            type="text"
                            class="full space"
                            name="title"
                            value="{{ old('title') }}"
                            required
                            autofocus>
    
                    </div>
    
                </div>
    
                <!-- DESCRIPTION -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="description">Description</label>
    
                    <div>

                        <textarea id="article-ckeditor"
                            class="full space"
                            name="description"
                            value="{{ old('description') }}"
                            required></textarea>
    
                    </div>
    
                </div>

                <!-- CREDITS -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="credits">Credits</label>
    
                    <div>

                        <input id="credits"
                            type="text"
                            class="full space"
                            name="credits"
                            placeholder="Modeling by Liv Sage"
                            value="{{ old('credits') }}">
    
                    </div>
    
                </div>

                <!-- TYPE -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="type">Type</label>
    
                    <div>

                        <input id="type"
                            type="text"
                            class="full space"
                            name="type"
                            placeholder="Charcoal drawing"
                            value="{{ old('type') }}"
                            required>
    
                    </div>
    
                </div>

                <!-- DATE -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="date">Date</label>
    
                    <div>

                        <input id="date"
                            type="text"
                            class="full space"
                            name="date"
                            placeholder="September 2018"
                            value="{{ old('date') }}"
                            required>
    
                    </div>
    
                </div>

                <!-- THUMB IMAGE -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="thumb_image">Thumb Image</label>
    
                    <div>

                        <input id="thumb_image"
                            type="file"
                            class="full space"
                            name="thumb_image"
                            required>
    
                    </div>
    
                </div>

                <!-- FULL IMAGE -->
                <div class="form-group padding">
    
                    <label class="space lowercase" for="full_image">Full Image</label>
    
                    <div>

                        <input id="full_image"
                            type="file"
                            class="full space"
                            name="full_image"
                            required>
    
                    </div>
    
                </div>

                <div class="half left space form-create-product">

                    <div class="space">
                        <h2>Print</h2>
                    </div>

                    <div id="form-print">

                        <!-- AVAILABLE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="prints-available">Available</label>
            
                            <div>

                                <input id="prints-available"
                                    type="number"
                                    class="full space"
                                    name="prints_available"
                                    placeholder="10"
                                    value="{{ old('prints_available') }}"
                                    required>
            
                            </div>

                        </div>

                        <!-- SIZE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="print-size">Size</label>
            
                            <div>

                                <input id="print-size"
                                    type="text"
                                    class="full space"
                                    name="print_size"
                                    placeholder="11 x 15 Inches"
                                    value="{{ old('print_size') }}"
                                    required>
            
                            </div>

                        </div>

                        <!-- PRICE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="print-price">Price</label>
            
                            <div>

                                <input id="print-price"
                                    type="text"
                                    class="full space"
                                    name="print_price"
                                    placeholder="$50.00"
                                    value="{{ old('print_price') }}"
                                    required>
            
                            </div>

                        </div>

                    </div>
    
                </div>

                <div class="half left space form-create-product">

                    <div class="space">
                        <h2>Original</h2>
                    </div>

                    <div id="form-print">

                        <!-- AVAILABLE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="original-available">Available</label>
            
                            <div>

                                <input id="original-available"
                                    type="number"
                                    class="full space"
                                    name="original_available"
                                    placeholder="1"
                                    value="{{ old('original_available') }}"
                                    required>
            
                            </div>

                        </div>

                        <!-- SIZE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="original-size">Size</label>
            
                            <div>

                                <input id="original-size"
                                    type="text"
                                    class="full space"
                                    name="original_size"
                                    placeholder="18 x 24 Inches"
                                    value="{{ old('original_size') }}"
                                    required>
            
                            </div>

                        </div>

                        <!-- PRICE -->
                        <div class="form-group padding">
            
                            <label class="space lowercase" for="original-price">Price</label>
            
                            <div>

                                <input id="original-price"
                                    type="text"
                                    class="full space"
                                    name="original_price"
                                    placeholder="$800.00"
                                    value="{{ old('original_price') }}"
                                    required>
            
                            </div>

                        </div>

                    </div>
    
                </div>

                <!-- SUBMIT -->
                <button class="space" type="submit">
                    {{ __('Create') }}
                </button>

                <script>CKEDITOR.replace( 'article-ckeditor' );</script>

            </form>

        </div>

    </main>

</div>

@endsection