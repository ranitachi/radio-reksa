<form class="form-horizontal" action="{{$id==-1 ? URL::to('galeri') : URL::to('galeri/'.$id) }}" method="{{($id==-1 ? "POST" : "PUT")}}" id="form-galeri">
  <fieldset class="content-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label class="control-label col-lg-3">Title</label>
      <div class="col-lg-9">
        <input type="text" class="form-control" placeholder="Title" name="title" id="title" autocomplete="off" value="{{($id!=-1 ? $det->title : '')}}">
      </div>
    </div>
		<div class="form-group">
			<label class="control-label col-lg-3">Image</label>
			<div class="col-lg-9">
				<div class="input-group">
				 <span class="input-group-btn">
					 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
						 <i class="fa fa-picture-o"></i> Choose
					 </a>
				 </span>
				 <input id="thumbnail" readonly class="form-control" type="text" name="picture" value="{{($id!=-1 ? $det->picture : '')}}">
			 </div>
			 <img id="holder" style="margin-top:15px;max-height:100px;" src="{{($id!=-1 ? asset($det->picture): '')}}">
			</div>
		</div>
    <div class="form-group">
      <label class="control-label col-lg-3">Flag</label>
      <div class="col-lg-4">
        <select class="select2" name="flag">
            <option value="-1">-Pilih-</option>
            <option value="1" {{$id!=-1 ? ($det->flag=='1' ? 'selected="selected"' : '') : ''}}>Active</option>
            <option value="0" {{$id!=-1 ? ($det->flag=='0' ? 'selected="selected"' : '') : ''}}>DeActive</option>
        </select>
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-lg-3">Category</label>
      <div class="col-lg-9">
        <input type="text" class="form-control" placeholder="Category" name="category" id="category" autocomplete="off" value="{{($id!=-1 ? $det->category : '')}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-3">Keterangan</label>

      <div class="col-lg-9">
        <textarea rows="3" cols="5" class="form-control" placeholder="Keterangan" name="desc" id="desc">{{($id!=-1 ? $det->desc : '')}}</textarea>
      </div>
    </div>
  </fieldset>
</form>
