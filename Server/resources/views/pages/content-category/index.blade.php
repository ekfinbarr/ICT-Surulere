@extends('layouts.default') @section('content')
<style>
    .content-body {
        margin: 0px !important;
    }
</style>
<div class="kt-pagetitle">
    <h5>Content Categories</h5>
</div>
<!-- kt-pagetitle -->

<div class="kt-pagebody">
    <div class="content-wrapper">
        <!-- content-left -->
        <div class="content-body">
            <div class="content-body-header">
                <div class="d-flex">
                    <div class="btn-group mg-b-0 mg-r-10 hidden-lg-up">
                        <button id="btnContentLeft" class="btn btn-secondary">
                            <i class="icon ion-navicon-round tx-20"></i>
                        </button>
                    </div>
                </div>
                <div class="mg-l-auto">
                    <div class="btn-group mg-b-0">
                        <button class="btn btn-secondary disabled">
                            <i class="icon ion-ios-arrow-back tx-20"></i>
                        </button>
                        <button class="btn btn-secondary">
                            <i class="icon ion-ios-arrow-forward tx-20"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- content-body-header -->

            <table class="table table-striped mg-b-0 mg-t-20">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="hidden-xs-down">Modified</th>
                        <th class="wd-5p"></th>
                    </tr>
                </thead>
                <tbody id="cat-tb-bdy">
                   
                </tbody>
            </table>
        </div>
        <!-- content-body -->
    </div>
    <!-- content-wrapper -->
</div>
<!-- kt-pagebody -->
<script>
    document.addEventListener("DOMContentLoaded", event => {
        window.API.loadCategories().then(r => {
            for (var i = 0; i < r.length; i++) {
                $("#cat-tb-bdy").append(
                    `<tr id="${r[i]["name"]}-category">
                        <td>
                            <i
                                class="fa fa-file-o tx-22 tx-danger lh-0 valign-middle"
                            ></i>
                            <span class="pd-l-5">${r[i]["label"]}</span>
                        </td>
                        <td class="hidden-xs-down">${r[i]["created_at"]}</td>
                        <td class="dropdown">
                            <a
                                href="#"
                                data-toggle="dropdown"
                                class="btn pd-y-3 tx-gray-500 hover-info"
                                ><i class="icon ion-more"></i
                            ></a>
                            <div
                                class="dropdown-menu dropdown-menu-right pd-10"
                            >
                                <nav class="nav nav-style-1 flex-column">
                                    <a
                                        href="/admin/content-category/${r[i]["name"]}"
                                        class="nav-link"
                                        >Info</a
                                    >
                                    <a
                                        href="/admin/content-category/${r[i]["name"]}/edit"
                                        class="nav-link"
                                        >Rename</a
                                    >
                                    <a
                                        href="/admin/content-category/${r[i]["name"]}"
                                        class="nav-link"
                                        >Delete</a
                                    >
                                </nav>
                            </div>
                            <!-- dropdown-menu -->
                        </td>
                    </tr>`
                    );
            }
        });
    });
</script>
@stop
