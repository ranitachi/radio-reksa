<table class="table table-striped table-bordered" id="data-galeri" width="100%">
  <thead>
    <tr>
      <th style="width:30px !important;">No</th>
      <th>Images</th>
      <th>Title</th>
      <th>Description</th>
      <th>Flag</th>
      <th style="width:200px !important;">Category</th>
      <th class="text-center" style="width:100px !important;">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $k => $v)
    <tr>
      <td class="text-center" style="width:20px !important;">{{($k+1)}}</td>
      <td class="" style="width:200px;"><img style="max-height:100px;" src="{{(asset($v->picture))}}"></td>
      <td style="">{{$v->title}}</td>
      <td style="">{!! $v->desc !!}</td>
      <td style="text-center" style="text-align:center !important;">
        {{$v->category}}
      </td>
      <td class="text-center">
        @if ($v->flag==0)
          <input type="checkbox" id="status" class="switch" value="{{$v->id}}" data-on-text="Active" data-off-text="DeActive" data-size="mini" onclick="ubah()">
        @else
          <input type="checkbox" id="status" class="switch" value="{{$v->id}}" data-on-text="Active" data-off-text="DeActive" checked="checked" data-size="mini" onclick="ubah()">
        @endif
      </td>
      <td class="text-center" style="width:100px !important;">
        <a href="javascript:edit({{$v->id}})"><i class="icon-pencil5"></i></a>
        <a href="javascript:hapus({{$v->id}})"><i class="icon-trash"></i></a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
<style>
th { font-size: 12px !important; padding:6px 10px !important; text-align: center;}
td { font-size: 11px !important; padding:6px 10px !important}
</style>
