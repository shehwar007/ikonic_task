<!----PArtial Payment MODEL---->
<div class="modal fade text-left" id="modalComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Comments</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Latest Comments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg dT_comment">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <form action="{{ route('comment.store') }}" method="post" autocomplete="off" class="form" data-parsley-validate>
                @csrf

                <input type="hidden" class="form-control" id="feedback_id" name="feedback_id">
                @csrf
                <div class="modal-body">
                    <label>Comment: </label>
                    <div class="form-group mandatory mt-1">
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="sumbit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>