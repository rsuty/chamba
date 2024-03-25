@extends('layouts.master')
@section('title')
    HOME
@endsection
@section('css')
@endsection
@section('content')
    <div class="card">
        <header class="card-header">
            <h4 class="card-title">Solicitudes</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6 dashcode-data-table">
                <span class=" col-span-8  hidden"></span>
                <span class="  col-span-4 hidden"></span>
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="grid grid-cols-12 gap-5 px-6 mt-6">
                                <div class="col-span-4">
                                    <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                                    class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-span-8 flex justify-end">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="" placeholder=""
                                                    aria-controls="DataTables_Table_0"></label></div>
                                </div>
                                <div id="pagination" class="flex items-center"></div>
                            </div>
                            <div class="min-w-full">
                                <table
                                        class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table dataTable no-footer"
                                        id="DataTables_Table_0">
                                    <thead class=" bg-slate-200 dark:bg-slate-700">
                                    <tr>
                                        <th scope="col" class="table-th sorting sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 25.5833px;" aria-sort="ascending" aria-label="
                                  Id
                                : activate to sort column descending">
                                            Id
                                        </th>
                                        <th scope="col" class="table-th sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 147.617px;" aria-label="
                                  Cliente
                                : activate to sort column ascending">
                                            Cliente
                                        </th>
                                        <th scope="col" class="table-th sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 112.617px;" aria-label="Chamba">
                                            Chamba
                                        </th>
                                        <th scope="col" class="table-th sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 105.917px;" aria-label="
                                  Estado
                                : activate to sort column ascending">
                                            Estado
                                        </th>
                                        <th scope="col" class="table-th sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 112.617px;" aria-label="
                                  Accion
                                : activate to sort column ascending">
                                            Accion
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody
                                            class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach($info as $request)

                                        <tr>
                                            <td class="table-td sorting_1">{{$request->id}}</td>
                                            <td class="table-td">
                                  <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="1"
                                 class="object-cover w-full h-full rounded-full">
                          </span>
                                  <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">
                                      <a href="{{route("profile.index", $request->client_id)}}">
                                          {{$request->client_name}}
                                      </a>
                                  </span>
                                  </span>
                                            </td>
                                            <td class="table-td">
                                                <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">
                                                    {{$request->chamba_name}}
                                                </span>
                                            </td>
                                            <td class="table-td ">
                                                @switch($request->status)
                                                    @case('pending')
                                                        <div
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                                            Pendiente
                                                        </div>
                                                        @break
                                                    @case('approved')
                                                        <div
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                            Aprobado
                                                        </div>
                                                        @break
                                                    @case('rejected')
                                                        <div
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                            Rechazado
                                                        </div>
                                                        @break
                                                @endswitch
                                            </td>
                                            <td class="table-td ">
                                                <div class="dropdown relative">
                                                    <button
                                                            class="btn btn-sm inline-flex justify-center btn-primary items-center"
                                                            type="button" id="primaryDropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        Accion
                                                        <iconify-icon class="text-xl ltr:ml-2 rtl:mr-2"
                                                                      icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                    </button>
                                                    <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none"
                                                        style="">
                                                        <li>
                                                            <form action="{{route("request.decline", $request->id)}}"
                                                                  method="post">
                                                                @csrf
                                                                @method("PUT")
                                                                <button type="submit" class="text-slate-600 dark:text-white block
                                                                font-Inter font-normal px-4 py-2 hover:bg-slate-100
                                                                dark:hover:bg-slate-600
                                                                dark:hover:text-white">
                                                                    <iconify-icon
                                                                            icon="heroicons:archive-box-x-mark"></iconify-icon>

                                                                    Rechazar
                                                                </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                dark:hover:text-white">

                                                                Aceptar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex justify-end items-center">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0"
                                       aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1"
                                       id="DataTables_Table_0_previous">
                                        <iconify-icon icon="ic:round-keyboard-arrow-left"></iconify-icon>
                                    </a><span><a class="paginate_button current" aria-controls="DataTables_Table_0"
                                                 aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a
                                            class="paginate_button " aria-controls="DataTables_Table_0" aria-role="link"
                                            data-dt-idx="1" tabindex="0">2</a><a class="paginate_button "
                                                                                 aria-controls="DataTables_Table_0"
                                                                                 aria-role="link" data-dt-idx="2"
                                                                                 tabindex="0">3</a><a
                                            class="paginate_button " aria-controls="DataTables_Table_0" aria-role="link"
                                            data-dt-idx="3" tabindex="0">4</a><a class="paginate_button "
                                                                                 aria-controls="DataTables_Table_0"
                                                                                 aria-role="link" data-dt-idx="4"
                                                                                 tabindex="0">5</a></span><a
                                        class="paginate_button next" aria-controls="DataTables_Table_0" aria-role="link"
                                        data-dt-idx="next" tabindex="0" id="DataTables_Table_0_next">
                                        <iconify-icon icon="ic:round-keyboard-arrow-right"></iconify-icon>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
