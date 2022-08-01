@extends('layouts.master')
@section('before-css')


@endsection

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.bubble.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.snow.css')}}">
@endsection

@section('main-content')
        <div class="breadcrumb">
                <h1>Editor</h1>
                <ul>
                    <li><a href="">Componets</a></li>
                    <li>Editor</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <h2>Quill</h2>
                    <p>Your powerful rich text editor.</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h2>Snow Editor</h2>
                            <p>Snow is a clean, flat toolbar theme.</p>
                            <div class="mx-auto col-md-8">
                                <div id="snow-editor">
                                    <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                    <p><br></p>
                                    <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>,
                                        it is completely customizable to fit any need.</p>
                                    <p><br></p>
                                    <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/nKd2QVrQVIM?showinfo=0" width="560" height="238"></iframe>
                                    <p><br></p>
                                    <p><br></p>
                                    <h2 class="ql-align-center">Getting Started is Easy</h2>
                                    <p><br></p>
                                    <pre class="language-markup">
                                        <code class="language-markup">
     // &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;


var quill = new Quill('#editor', {
modules: {
toolbar: '#toolbar'
k
},
theme: 'snow'
});

// Open your browser's developer console to try out the API!
                                        </code>	</pre>



                                    <p><br></p>
                                    <p><br></p>

                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->

                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h2>Bubble Editor</h2>
                            <p>Snow is a clean, flat toolbar theme.</p>
                            <div class="mx-auto col-md-8">
                                <div id="bubble-editor">
                                    <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                    <p><br></p>
                                    <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                            architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is completely customizable to fit any need.</p>
                                    <p><br></p>
                                    <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/nKd2QVrQVIM?showinfo=0" width="560" height="238"></iframe>
                                    <p><br></p>
                                    <p><br></p>
                                    <h2 class="ql-align-center">Getting Started is Easy</h2>
                                    <p><br></p>
                                    <pre class="language-markup">
                                        <code class="language-markup">
     // &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;


var quill = new Quill('#editor', {
modules: {
toolbar: '#toolbar'
k
},
theme: 'bubble'
});

// Open your browser's developer console to try out the API!
                                        </code>	</pre>



                                    <p><br></p>
                                    <p><br></p>

                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h2>FULL EDITOR </h2>
                            <p>By default all formats are enabled and allowed to exist within a Quill editor and can be configured with the formats option. This is separate from adding a control in the Toolbar. For example, you can configure Quill to allow
                                bolded content to be pasted into an editor that has no bold button in the toolbar.</p>
                            <div class="mx-auto col-md-8">
                                <div id="full-editor">
                                    <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                    <p><br></p>
                                    <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                            architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is completely customizable to fit any need.</p>
                                    <p><br></p>
                                    <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/nKd2QVrQVIM?showinfo=0" width="560" height="238"></iframe>
                                    <p><br></p>
                                    <p><br></p>
                                    <h2 class="ql-align-center">Getting Started is Easy</h2>
                                    <p><br></p>
                                    <pre class="language-markup">
                                        <code class="language-markup">
     // &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;


var quill = new Quill('#editor', {
modules: {
toolbar: '#toolbar'
k
},
theme: 'snow'
});

// Open your browser's developer console to try out the API!
                                        </code>	</pre>



                                    <p><br></p>
                                    <p><br></p>

                                    <p><br></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of col -->


            </div>
            <!-- end of row -->

@endsection

@section('page-js')


 <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="{{asset('assets/js/vendor/quill.min.js')}}"></script>



@endsection

@section('bottom-js')

<script src="{{asset('assets/js/quill.script.js')}}"></script>


@endsection
