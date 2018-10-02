<table class="table table-striped table-bordered" id="data-berita" width="100%">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Judul</th>
      <th class="text-center">Kategori</th>
      <th class="text-center">View</th>
      <th class="text-center">Flag</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $k => $v)
      <tr>
        <td class="text-center">{{($k+1)}}</td>
        <td>{{($v->title)}}</td>
        <td>{{(isset($cat[$v->id_kategori]) ? $cat[$v->id_kategori]->nama_kategori : '')}}</td>
        <td class="text-center"><span class="label label-primary label-rounded">{{($v->view)}}</span></td>
        <td class="text-center">
          @if ($v->flag==0)
            <input type="checkbox" value="{{$v->id}}" class="switch" data-on-text="On" data-off-text="Off" data-size="mini">
          @else
            <input type="checkbox" value="{{$v->id}}" class="switch" data-on-text="On" data-off-text="Off" checked="checked" data-size="mini">
          @endif
        </td>
        <td class="text-center">
          <a href="{{URL::to('/berita-form')}}/{{$v->id}}"><i class="icon-pencil5"></i></a>
          <a href="javascript:hapus({{$v->id}})"><i class="icon-trash"></i></a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
<style>
th { font-size: 12px !important; padding:6px 10px !important}
td { font-size: 11px !important; padding:6px 10px !important}
</style>
