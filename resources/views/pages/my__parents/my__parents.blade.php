@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('Parent_trans.title_page') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{ trans('main_trans.Parents') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


@if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
@endif



<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                {{ trans('Parent_trans.add_parent') }}
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            {{--  <th>/</th>  --}}
                            <th>{{ trans('Parent_trans.Name') }}</th>
                            <th>{{ trans('Parent_trans.relative_relation') }}</th>
                            <th>{{ trans('Parent_trans.Nationality_parents') }}</th>
                            <th>{{ trans('Parent_trans.Address_parents') }}</th>
                            {{--  <th>{{ trans('Parent_trans.password') }}</th>  --}}
                            <th>{{ trans('Parent_trans.number_phone') }}</th>
                            <th>/</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{--  <?php $i = 0; ?>  --}}
                        @foreach ($My_Parent as $My_Parent)
                            <tr>
                                {{--  <?php $i++; ?>  --}}
                                {{--  <td></td>  --}}
                                <td>{{ $My_Parent->name }}</td>
                                <td>{{ $My_Parent->relative_relation }}</td>
                                <td>{{ $My_Parent->nationalities->Name }}</td>
                                <td>{{ $My_Parent->Address_parents }}</td>
                                <td>{{ $My_Parent->number_phone }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $My_Parent->id }}"
                                        title="{{ trans('Parent_trans.Edit') }}"><i class="fa fa-edit"></i></button>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $My_Parent->id }}"
                                        title="{{ trans('Parent_trans.Delete') }}"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>



                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit{{ $My_Parent->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('Parent_trans.Edit') }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('add_parent.update', 'test') }}" method="post">  {{--  حتى يظهر اذا في خطأ بتجهيز الصفحة ("test")  --}}

                                                {{ method_field('patch') }}
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name"
                                                            class="mr-sm-2">{{ trans('Parent_trans.Name_Parent') }}
                                                            :</label>
                                                        <input id="Name" type="text" name="Name"
                                                            class="form-control"
                                                            value="{{ $My_Parent->getTranslation('name', 'ar') }}"
                                                            required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="{{ $My_Parent->id }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="Name_en"
                                                            class="mr-sm-2">{{ trans('Parent_trans.Name_Parent_en') }}
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $My_Parent->getTranslation('name', 'en') }}"
                                                            name="Name_en" required>
                                                    </div>
                                                </div>
                                                <br><br>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="relative_relation"
                                                            class="mr-sm-2">{{ trans('Parent_trans.relative_relation') }}
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $My_Parent->relative_relation }}"
                                                            name="relative_relation" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="exampleFormControlTextarea1">{{ trans('Parent_trans.Nationality_parents') }}
                                                            :</label>
                                                        <select class="form-control form-control-lg"
                                                                id="exampleFormControlSelect1" name="Nationality_parents_id">
                                                            <option value="{{ $My_Parent->nationalities->id }}">
                                                                {{ $My_Parent->nationalities->Name }}
                                                            </option>
                                                            @foreach ($Nationality_parents as $bb)
                                                                <option value="{{ $bb->id }}">
                                                                    {{ $bb->Name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br><br>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="number_phone"
                                                            class="mr-sm-2">{{ trans('Parent_trans.number_phone') }}
                                                            :</label>
                                                        <input id="number_phone" type="text" name="number_phone"
                                                            class="form-control"
                                                            value="{{ $My_Parent->number_phone}}"
                                                            required>
                                                    </div>

                                                    <div class="col">
                                                        <label for="Address_parents"
                                                            class="mr-sm-2">{{ trans('Parent_trans.Address_parents') }}
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $My_Parent->Address_parents }}"
                                                            name="Address_parents" required>
                                                    </div>
                                                </div>


                                                {{--  <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">{{ trans('Parent_trans.Notes') }}
                                                        :</label>
                                                    <textarea class="form-control" name="Notes"
                                                        id="exampleFormControlTextarea1"
                                                        rows="3">{{ $My_Parent->Notes }}</textarea>
                                                </div>  --}}
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ trans('Parent_trans.Close') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-success">{{ trans('Parent_trans.submit') }}</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $My_Parent->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('Parent_trans.Delete') }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('add_parent.destroy', 'test') }}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                {{ trans('Parent_trans.Warning_Grade') }}

                                                {{--  @if (App::getLocale() == 'ar')

                                                <input id="Name" type="text" name="Name"
                                                class="form-control"
                                                value="{{ $My_Parent->getTranslation('name', 'ar') }}"
                                                @disabled(true)>

                                                @else

                                                <input type="text" class="form-control"
                                                            value="{{ $My_Parent->getTranslation('name', 'en') }}"
                                                            name="Name_en" @disabled(true)>

                                                @endif  --}}




                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="{{ $My_Parent->id }}">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ trans('Parent_trans.Close') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-danger">{{ trans('Parent_trans.delete') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<!-- add_modal_Parent -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{ trans('Parent_trans.add_parent') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('add_parent.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2">{{ trans('Parent_trans.Name_Parent') }}
                                :</label>
                            <input id="Name" type="text" name="Name" class="form-control">
                        </div>
                        <div class="col">
                            <label for="Name_en" class="mr-sm-2">{{ trans('Parent_trans.Name_Parent_en') }}
                                :</label>
                            <input type="text" class="form-control" name="Name_en">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="email" class="mr-sm-2">{{ trans('Parent_trans.Email') }}
                                :</label>
                            <input id="email" type="email" name="email" class="form-control">
                        </div>
                        <div class="col">
                            <label for="password" class="mr-sm-2">{{ trans('Parent_trans.Password') }}
                                :</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="relative_relation" class="mr-sm-2">{{ trans('Parent_trans.relative_relation') }}
                                :</label>
                            <input id="text" type="text" name="relative_relation" class="form-control">
                        </div>
                        <label
                        for="exampleFormControlTextarea1">{{ trans('Parent_trans.Nationality_parents') }}
                        :</label>
                        <select class="fancyselect" name="Nationality_parents_id">
                            @foreach($Nationality_parents as $aa)

                            <option
                                value="{{ $aa->id }}">
                                {{ $aa->Name }}
                            </option>
                        @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="Address_parents" class="mr-sm-2">{{ trans('Parent_trans.Address_parents') }}
                                :</label>
                            <input id="Address_parents" type="text" name="Address_parents" class="form-control">
                        </div>
                        <div class="col">
                            <label for="number_phone" class="mr-sm-2">{{ trans('Parent_trans.number_phone') }}
                                :</label>
                            <input type="text" class="form-control" name="number_phone">
                        </div>
                    </div>


                    <br><br>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">{{ trans('Parent_trans.Close') }}</button>
                <button type="submit"
                    class="btn btn-success">{{ trans('Parent_trans.add') }}</button>
            </div>

            </form>

        </div>
    </div>
</div>

</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
