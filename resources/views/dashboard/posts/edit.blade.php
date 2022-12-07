@extends('dashboard.layouts.layout')

@section('container')
    <h1>Edit post</h1>

    <div class="col-8">
        <form method="post" action="/dashboard/posts/{{ $artikel->slug }}">
          
            @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required value="{{ old('judul', $artikel->judul) }}">
              @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('slug') is-invalid @enderror" required value="{{ old('slug', $artikel->slug) }}">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select name="category_id" class="form-select" value="{{ old('category_id', $artikel->category_id) }}">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name_kategori }}</option>
                    @endforeach
                </select>
            </div> 
            <div class="mb-3">
                <li style="list-style-type: none" class="nav-item dropdown" >
                    <a style="display: flex" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <h4>Isi</h4>
                    </a>
                    <ul class="dropdown-menu">
                      <li>Tambahkan tag p untuk memulai dan mengakhiri paragraf </li>
                      <hr> 
                      <li>Gunakan tag heading untuk membuat sub-bab</li>
                      <li></li>
                    </ul>
                  </li> 
                <input style="width:100%; height: 10vh;" value="{{ old('isi', $artikel->isi) }}"  type="text" name="isi" id="isi" class="form-controll">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    {{-- <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEvenListener('change', function() {
            fetch('/dashboard/posts/cekSlug?judul=' +judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script> --}}
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection

{{-- @section('script')
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>

@endsection --}}