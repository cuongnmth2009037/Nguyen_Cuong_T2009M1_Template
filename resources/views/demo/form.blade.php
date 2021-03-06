@extends('demo.master-layout')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Basic Forms</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Forms</span></li>
                    <li><span>Basic</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Form Elements</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="get">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Default</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDisabled">Disabled</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="inputDisabled" type="text" placeholder="Disabled input here..." disabled="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputReadOnly">Read-Only Input</label>
                                <div class="col-md-6">
                                    <input type="text" value="Read-Only Input" id="inputReadOnly" class="form-control" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputHelpText">Help text</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputHelpText">
                                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">Rounded Input</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-rounded" id="inputRounded">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputFocus">Input focus</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="inputFocus" type="text" value="This is focused...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Placeholder</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPassword">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="" id="inputPassword">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-md-3 control-label">Static control</label>
                                <div class="col-lg-6">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Left Icon</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
														<span class="input-group-addon">
															<span class="icon"><i class="fa fa-user"></i></span>
														</span>
                                        <input type="text" class="form-control" placeholder="Left icon">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Right Icon</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
                                        <input type="text" class="form-control" placeholder="Right icon">
                                        <span class="input-group-addon">
															<span class="icon"><i class="fa fa-user"></i></span>
														</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Search</label>
                                <div class="col-md-6">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                                        <span class="input-group-btn">
															<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
														</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">File Upload</label>
                                <div class="col-md-6">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file">
															</span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Vertical Group</label>
                                <div class="col-md-6">
                                    <section class="form-group-vertical">
                                        <input class="form-control" type="text" placeholder="Username">
                                        <input class="form-control" type="text" placeholder="Email">
                                        <input class="form-control last" type="password" placeholder="Password">
                                    </section>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Vertical Group w/ icon</label>
                                <div class="col-md-6">
                                    <section class="form-group-vertical">
                                        <div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-user"></i></span>
															</span>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
                                            <input class="form-control" type="text" placeholder="Password">
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <div class="form-group has-success">
                                <label class="col-md-3 control-label" for="inputSuccess">Input with success</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputSuccess">
                                </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="col-md-3 control-label" for="inputWarning">Input with warning</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputWarning">
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-md-3 control-label" for="inputError">Input with error</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputError">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputTooltip">Input with Tooltip</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Hover me" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Place your tooltip info here" id="inputTooltip">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPopover">Input with Popover</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Click Here" class="form-control" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" id="inputPopover">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Column sizing</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" placeholder=".col-sm-2">
                                        </div>
                                        <div class="visible-xs mb-md"></div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder=".col-sm-3">
                                        </div>
                                        <div class="visible-xs mb-md"></div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder=".col-sm-4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- end: page -->
    </section>
@endsection
@section('current-page-script')
    <script src="/assets/javascripts/forms/examples.advanced.form.js" /></script>
@endsection
