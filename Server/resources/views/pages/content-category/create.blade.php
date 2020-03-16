@extends('layouts.default') @section('content')
<div class="kt-pagetitle">
    <h5>Content Creator</h5>
</div>
<!-- kt-pagetitle -->

<div class="kt-pagebody">
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Create a new post content</h6>
        <p class="mg-b-20 mg-sm-b-30">
            <span style="color:red;">*</span> Marked fields are required.
        </p>
        <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Content Type:
                            <span class="tx-danger">*</span></label
                        >
                        <select
                            class="form-control select2 select2-hidden-accessible"
                            data-placeholder="Select Content Type"
                            tabindex="-1"
                            aria-hidden="true"
                            id="content_type"
                        >
                            <option
                                label="Select Content Type"
                                disabled
                            ></option>
                        </select>
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Category: <span class="tx-danger">*</span></label
                        >
                        <select
                            class="form-control select2 select2-hidden-accessible"
                            data-placeholder="Select Category"
                            tabindex="-1"
                            aria-hidden="true"
                            id="categories"
                        >
                            <option label="Select Category" disabled></option>
                        </select>
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Access Level:
                            <span class="tx-danger">*</span></label
                        >
                        <select
                            class="form-control select2 select2-hidden-accessible"
                            data-placeholder="Select access type"
                            tabindex="-1"
                            aria-hidden="true"
                            id="access_type"
                        >
                            <option
                                label="Select access type"
                                disabled
                            ></option>
                        </select>
                    </div>
                </div>
                <!-- col-4 -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- card -->

    <div class="card pd-20 pd-sm-40 mg-t-10">
        <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label"
                    >Title: <span class="tx-danger">*</span></label
                >
                <input
                    class="form-control"
                    type="text"
                    name="title"
                    id="title"
                    placeholder="Title"
                />
            </div>
        </div>
        <div id="editor_box">
            <!-- col-12 -->
            <h6 class="card-body-title">Body</h6>

            <!-- The toolbar will be rendered in this container. -->
            <div id="toolbar-container"></div>

            <!-- This container will become the editable. -->
            <div id="editor" style="height: 400px;">
                <p>This is the initial editor content.</p>
            </div>

            <script>
                DecoupledEditor.create(document.querySelector("#editor"))
                    .then(editor => {
                        const toolbarContainer = document.querySelector(
                            "#toolbar-container"
                        );

                        toolbarContainer.appendChild(
                            editor.ui.view.toolbar.element
                        );
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </div>
    </div>
    <!-- card -->
    <div class="card pd-20 pd-sm-40 mg-t-10">
        <div class="form-layout">
            <div class="row mg-b-25">
                <!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Rating: <span class="tx-danger">*</span></label
                        >
                        <!-- <label class="custom-file"> -->
                        <input
                            type="file"
                            id="media_file"
                            class="custom-file-input"
                        />
                        <span class="custom-file-control"></span>
                        <!-- </label> -->
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Rating: <span class="tx-danger">*</span></label
                        >
                        <input
                            class="form-control select2 select2-hidden-accessible"
                            type="number"
                            max="5"
                            min="1"
                            name="rating"
                            id="rating"
                            aria-hidden="true"
                        />
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Publish Date:
                            <span class="tx-danger">*</span></label
                        >
                        <div class="wd-200">
                            <div class="input-group">
                                <span class="input-group-addon"
                                    ><i
                                        class="icon ion-calendar tx-16 lh-0 op-6"
                                    ></i
                                ></span>
                                <input
                                    type="text"
                                    class="form-control fc-datepicker hasDatepicker"
                                    placeholder="MM/DD/YYYY"
                                    id="date_published"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label"
                            >Publish: <span class="tx-danger">*</span></label
                        >
                        <label class="ckbox">
                            <input type="checkbox" />
                            <span>Checkbox Unchecked</span>
                        </label>
                    </div>
                </div>
                <!-- col-4 -->
            </div>
            <!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-default mg-r-5">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
            <!-- form-layout-footer -->
        </div>
    </div>
    <!-- card -->
</div>
<!-- <script src="{{ asset('lib/medium-editor/medium-editor.js') }}"></script> -->
<!-- <script src="{{ asset('js/api.js') }}"></script> -->
<script>
    document.addEventListener("DOMContentLoaded", event => {
        let category_field = document.getElementById("categories");
        let content_type_field = document.getElementById("content_type");
        let access_type_field = document.getElementById("access_type");
        let editor_box = document.getElementById("editor_box");

        content_type_field.addEventListener("change", () => {
            if (content_type_field.value == "text") {
                editor_box.style ="display: inline;"; 
            } else if (content_type_field.value == "video") {
                editor_box.style ="display: none;"; 
            }
        });

        window.API.loadCategories().then(r => {
            for (var i = 0; i < r.length; i++) {
                $(category_field).append(
                    `<option value= ${r[i]["name"]} > ${r[i]["label"]} </option>`
                );
            }
        });

        window.API.loadContentTypes().then(r => {
            for (var i = 0; i < r.length; i++) {
                $(content_type_field).append(
                    `<option value= ${r[i]["name"]} > ${r[i]["label"]} </option>`
                );
            }
        });
        window.API.loadAccessTypes().then(r => {
            for (var i = 0; i < r.length; i++) {
                $(access_type_field).append(
                    `<option value= ${r[i]["name"]} > ${r[i]["label"]} </option>`
                );
            }
        });
    });
</script>
@stop
