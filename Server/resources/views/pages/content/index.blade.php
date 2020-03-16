@extends('layouts.default') @section('content')
<div class="kt-pagetitle">
    <h5>Content Manager</h5>
</div>
<!-- kt-pagetitle -->

<div class="kt-pagebody">
    <div class="content-wrapper">
        <div class="content-left">
            <a href="/admin/content/create" class="btn btn-default btn-block mg-b-20">Add Content</a>

            <label class="content-left-label">Browse Contents</label>
            <ul class="nav mg-t-1-force">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>All Post</span>
                    </a>
                </li>
                <!-- nav-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Recently Added</span>
                    </a>
                </li>
                <!-- nav-item -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Recently Viewed</span>
                    </a>
                </li> -->
                <!-- nav-item -->
            </ul>
        </div>
        <!-- content-left -->
        <div class="content-body">
            <div class="content-body-header">
                <div class="d-flex">
                    <div class="btn-group mg-b-0 mg-r-10 hidden-lg-up">
                        <button id="btnContentLeft" class="btn btn-secondary">
                            <i class="icon ion-navicon-round tx-20"></i>
                        </button>
                    </div>
                    <!-- btn-group -->

                    <div class="content-checkall">
                        <label class="ckbox mg-b-0">
                            <input type="checkbox" /><span></span>
                        </label>
                    </div>
                    <!-- <div class="btn-group mg-b-0 hidden-xs-down">
            <button class="btn btn-secondary"><i class="icon ion-ios-box-outline tx-24"></i></button>
            <button class="btn btn-secondary disabled"><i class="icon ion-ios-trash-outline tx-20"></i></button>
            <button class="btn btn-secondary"><i class="icon ion-ios-pricetags-outline tx-20"></i></button>
          </div> -->
                    <!-- btn-group -->
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
                    <!-- btn-group -->

                    <!-- <div class="btn-group mg-b-0 mg-l-5">
            <button class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-20"></i></button>
          </div> -->
                    <!-- btn-group -->
                </div>
            </div>
            <!-- content-body-header -->

            <table class="table table-striped mg-b-0 mg-t-20">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th class="hidden-xs-down">Modified</th>
                        <th class="wd-5p"></th>
                    </tr>
                </thead>
                <tbody id="content_list"></tbody>
            </table>
        </div>
        <!-- content-body -->
    </div>
    <!-- content-wrapper -->
</div>
<!-- kt-pagebody -->
<script src="{{ asset('js/axios.min.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", event => {
        API.loadContents().then(r => {
            for (var i = 0; i < r.length; i++) {
                // console.log("Content : " + JSON.stringify(r));
                $("#content_list").append(
                    `<tr id="${r[i]["id"]}-content">
                        <td>
                            <span class="pd-l-5">${r[i]["title"].substring(0, 25)}...</span>
                        </td>
                        <td>${r[i]["content_category"]["label"]}</td>
                        <td>${r[i]["content_type"]["label"]}</td>
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
                                    <a href="/admin/content/${
                                        r[i]["id"]
                                    }" class="nav-link">View</a>
                                    <a href="/admin/content/${
                                        r[i]["id"]
                                    }/edit" class="nav-link">Edit</a>
                                    <a href="/admin/content/${
                                        r[i]["id"]
                                    }/delete" class="nav-link">Delete</a>
                                </nav>
                            </div>
                        </td>
                    </tr>`
                    // `<option value= ${r[i]["name"]} > ${r[i]["label"]} </option>`
                );
            }
        });
    });
</script>
@stop
