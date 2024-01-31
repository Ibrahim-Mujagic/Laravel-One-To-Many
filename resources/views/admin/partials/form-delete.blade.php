<form class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare: {{$project->name}} ')"
  action="{{route('admin.projects.destroy',$project)}}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
</form>