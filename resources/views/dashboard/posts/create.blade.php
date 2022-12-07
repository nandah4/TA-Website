@extends('dashboard.layouts.layout')

@section('container')
    <h1>New post</h1>

    <div class="col-8">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required>
              @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('slug') is-invalid @enderror" required>Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select name="category_id" class="form-select">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name_kategori }}</option>
                    @endforeach
                </select>
            </div> 
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <ul>
                    <li>Gunakan tag Paragraf untuk memulai dan mengakhiri paragraf </li>
                    <li>Gunakan tag Heading untuk membuat judul</li>
                </ul>
                <input style="width:100%; height: 10vh" type="text" name="isi" id="isi" class="form-controll">
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