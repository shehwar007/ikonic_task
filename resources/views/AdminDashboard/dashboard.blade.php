@extends('AdminDashboard.Main.app')
@section('page-title','Dashboard')
@push('mycss')
<!--here is you css-->
<link rel="stylesheet" href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}">

<link rel="stylesheet" href="{{asset('assets/extensions/choices.js/public/assets/styles/choices.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/pages/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/pages/datatables.css')}}">
<link rel="stylesheet" href="{{asset('assets/extensions/@icon/dripicons/dripicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/pages/dripicons.css')}}">
@endpush
@section('page_content')
<div class="page-content">
    <section class="row">
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon purple mb-2">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Total Users</h6>
                            <h6 class="font-extrabold mb-0">12</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon blue mb-2">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Total FeedBack</h6>
                            <h6 class="font-extrabold mb-0">12</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="multiple-column-form">
        <div class="row match-height">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-10">
                            <div class="card-header">
                                Feedback List
                            </div>
                        </div>

                    </div>


                    <div class="card-body">
                        <table class="table  table-hover dT">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Vote</th>
                                    <th>User</th>
                                    <th>Vote Now</th>
                                    <th>Comments</th>



                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Feedback</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('feedback.store') }}" method="post" autocomplete="off" class="form" data-parsley-validate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Title</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Title" name="title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Category</label>
                                            <select class="form-select" id="basicSelect" name="category">
                                                <option value="">---Select---</option>
                                                <option>Bug</option>
                                                <option>Feature</option>
                                                <option>Improvement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Desciption</label>
                                            <textarea id="city-column" class="form-control" placeholder="Desciption" rows="5" name="description"></textarea>
                                        </div>
                                    </div>


                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@include('AdminDashboard.modal')
@endsection
@push('myscript')

<script src="{{ asset('assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/parsley.js')}}"></script>
<script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.js')}}"></script>
<script src="{{ asset('assets/js/pages/form-element-select.js')}}"></script>
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js')}}"></script>>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
@if (Session::has('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "Success",
        text: "{!! Session::get('success') !!}",
    });
</script>
@endif
@if (Session::has('error'))
<script>
    Swal.fire({
        icon: "error",
        title: "Error",
        text: "{!! Session::get('error') !!}",
    });
</script>
@endif

<script>
    $(document).ready(function() {

        load_data();


    });
</script>

<script>
    function load_data(data = '') {
        var table = $('.dT').DataTable({
            retrieve: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('feedback.index') }}",
                data: function(d) {
                    d.data = data;
                },
            },
            dom: 'lBfrtip',
            responsive: true,
            autoWidth: false,
            scrollY: false,
            buttons: [
                'excel', 'pdf', 'print'
            ],

            "lengthMenu": [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            columns: [{
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },

                {
                    data: 'title',
                    name: 'title'
                },

                {
                    data: 'category',
                    name: 'category'
                },

                {
                    data: 'vote_count',
                    name: 'vote_count'
                },
                {
                    data: 'user',
                    name: 'user'
                },
                {
                    // Add a column for the "Add Vote" button with a form
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full, meta) {
                        // You can customize the form structure based on your requirements
                        return `
                        <div>
                        <form class="form-add-vote" action="{{ route('vote.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="feedback_id" value="${data.id}">
                            <button type="submit" class="btn btn-primary" >Add Vote</button>
                           
                        </form>
                       </div>`;
                    }
                },
                {
                    // Add a column for the "Add Vote" button with a form
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full, meta) {
                        return '<button class="btn btn-primary btn-add-vote" data-id="' + data.id + '">Add/View Comments</button>';
                    }
                }




            ]

        });

        $('.dT tbody').on('click', 'button.btn-add-vote', function() {
            var data = table.row($(this).parents('tr')).data();
            // Open a modal or show a form for submitting votes
            openCommentModal(data.id);
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-info text-white mt-2');
    }
</script>

<script>
    function openCommentModal(id) {
        $("#feedback_id").val(id);
         comment_data();
        $('#modalComment').modal('toggle');
    }



    function comment_data(data = '') {
        var table = $('.dT_comment').DataTable({
            retrieve: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('comment.index') }}",
                data: function(d) {
                    d.data = data;
                },
            },
            dom: '',
            responsive: true,
            autoWidth: false,
            scrollY: false,
            buttons: [
                'excel', 'pdf', 'print'
            ],

            "lengthMenu": [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            columns: [{
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },

                {
                    data: 'user',
                    name: 'user'
                },

               
                {
                    data: 'content',
                    name: 'content'
                },

                {
                    data: 'created_at',
                    name: 'created_at'
                },
                
             




            ]

        });

    }
</script>
@endpush