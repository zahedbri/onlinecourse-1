<div class="modal-header">
    <span class="modal-title" >Edit Category</span>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form class="form-horizontal edit-category-form" method="POST" action="{{route('category.update',$category)}} ">

        <div class="row form-group">
            <div class="col-sm-3"><label class="control-label">Category Name</label></div>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter category name" id="name"
                       name="name" value="{{$category->name}}"/>
            </div>
        </div>
        {{ method_field('PATCH') }}
        {{csrf_field()}}
    </form>

</div>
<div class="modal-footer">
    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    <button type="button" id="edit-category-submit" class="btn btn-success save-course-btn">Save changes</button>
</div>

<script>
    $(document).ready(function(){
        $('#edit-category-submit').click(function(){
            $('.edit-category-form').submit();
        });
    });
</script>