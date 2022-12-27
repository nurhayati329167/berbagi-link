<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <i class="bi bi-link-45deg"></i>
                    Berbagi Link
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item">
                        Manajemen User
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        Daftar User Yang Mengaitkan Akun Anda
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head with_tab">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Daftar User Yang Mengaitkan Akun Anda
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <!--begin: Datatable -->
                <div class="m_datatable">
                    <!--begin: Datatable -->
                    <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="data_table_length"><label>Show <select
                                            name="data_table_length" aria-controls="data_table"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="data_table_filter" class="dataTables_filter"><label
                                        id="css_cs_cursor">Cari<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="data_table"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="data_table_length"><label>Show <select
                                                        name="data_table_length" aria-controls="data_table"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="data_table_filter" class="dataTables_filter"><label>Cari<input
                                                        type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="data_table"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table
                                                class="table table-striped table-hover table-sm table-hover m_datatable table-checkable dataTable no-footer dtr-inline"
                                                id="data_table" role="grid" aria-describedby="data_table_info"
                                                style="width: 1167px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="data_table"
                                                            rowspan="1" colspan="1" style="width: 105.912px;"
                                                            aria-label="Nama: activate to sort column ascending">Nama
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="data_table"
                                                            rowspan="1" colspan="1" style="width: 100.1px;"
                                                            aria-label="Email: activate to sort column ascending">Email
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="data_table"
                                                            rowspan="1" colspan="1" style="width: 155.275px;"
                                                            aria-label="Username: activate to sort column ascending">
                                                            Username</th>
                                                        <th class="sorting_desc sorting" tabindex="0"
                                                            aria-controls="data_table" rowspan="1" colspan="1"
                                                            style="width: 108.85px;" aria-sort="descending"
                                                            aria-label="Status: activate to sort column ascending">
                                                            Status</th>
                                                        <th class="sorting cs_pointer" tabindex="0"
                                                            aria-controls="data_table" rowspan="1" colspan="1"
                                                            style="width: 219.038px;"
                                                            aria-label="Tanggal Request: activate to sort column ascending"
                                                            id="css_cs_pointer">Tanggal Request</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 158.225px;" aria-label="#Tindakan">#Tindakan
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td valign="top" colspan="6" class="dataTables_empty">No data
                                                            available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="data_table_processing" class="dataTables_processing card"
                                                style="display: none;">Processing...</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="data_table_info" role="status"
                                                aria-live="polite"></div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="data_table_paginate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="data_table_processing" class="dataTables_processing card"
                                    style="display: none;">Processing...</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="data_table_info" role="status" aria-live="polite">
                                    Showing 0 to 0 of 0 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="data_table_previous"><a href="#" aria-controls="data_table"
                                                data-dt-idx="0" tabindex="0" class="page-link"><i
                                                    class="la la-angle-left"></i></a></li>
                                        <li class="paginate_button page-item next disabled" id="data_table_next"><a
                                                href="#" aria-controls="data_table" data-dt-idx="1" tabindex="0"
                                                class="page-link"><i class="la la-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable -->
                </div>
                <!--end: Datatable -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->
</div>