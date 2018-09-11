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
    
                    <label class="space lowercase" for="title">Description</label>
    
                    <div>

                        <textarea id="article-ckeditor"
                            class="full space"
                            name="title"
                            value="{{ old('title') }}"
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
                            value="{{ old('type') }}"
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