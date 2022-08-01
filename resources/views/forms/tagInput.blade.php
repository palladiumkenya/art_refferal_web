@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Tag inputs</h1>
                <ul>
                    <li><a href="">UI Kits</a></li>
                    <li>Tag inputs</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Tags input</div>

                            <fieldset>
                                <label>Type and press Enter</label>
                                <div class="form-group">
                                    <div data-no-duplicate="true" data-pre-tags-separator="\n" data-no-duplicate-text="Duplicate tags"
                                        data-type-zone-class="type-zone" data-tag-box-class="tagging"
                                        data-edit-on-delete="false" class="tagBox">preexisting-tag</div>
                                    <p class="text-muted">Enter key add a new tag by default, set it
                                        <code>no-enter:true</code> to disable that.</p>
                                </div>
                            </fieldset>

                            <fieldset>
                                <label>Case sensitive</label>
                                <div class="form-group">
                                    <div data-no-duplicate="true" data-pre-tags-separator="," data-no-duplicate-text="Duplicate tags"
                                        data-type-zone-class="type-zone" data-case-sensitive="true" data-tag-box-class="tagging"
                                        class="tagBox case-sensitive">Australia,Brazil,USA</div>
                                        <p class="text-muted">Set it <code>case-sensitive:true</code></p>
                                </div>
                            </fieldset>

                            <fieldset>
                                <label>Forbidden Words</label>
                                <div class="form-group">
                                    <div data-no-duplicate="true" data-pre-tags-separator="," data-no-duplicate-text="Duplicate tags"
                                        data-type-zone-class="type-zone" data-tag-box-class="tagging"
                                        data-edit-on-delete="true" class="forbidden-words"></div>
                                    <p class="text-muted"><code>"forbidden-words":["shit","bloody"]</code> </p>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>



@endsection

@section('page-js')


 <script src="{{asset('assets/js/vendor/tagging.min.js')}}"></script>
 <script src="{{asset('assets/js/tagging.script.js')}}"></script>

@endsection

@section('bottom-js')




@endsection
