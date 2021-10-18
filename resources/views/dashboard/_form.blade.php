@csrf

<div class="form-group">
    <label for="title">Titulo</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title',$book->title)}}">
    @error('title')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="url_clean">Autor</label>
    <input class="form-control" type="text" name="author" id="author" value="{{ old('author',$book->author)}}">
    @error('author')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="category_id">Categorias</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option {{$book->category_id == $id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
    @error('category_id')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>

<input type="hidden" value="{{ $user }}" name="editorial">

<div class="form-group">
    <label for="url_clean">Precio</label>
    <input class="form-control" type="number" step="0.01" min="0" name="price" id="price" value="{{ old('price',$book->price)}}">
    @error('price')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="url_clean">Lenguaje</label>
    <input class="form-control" type="text" name="lenguage" id="lenguage" value="{{ old('lenguage',$book->lenguage)}}">
    @error('lenguage')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="content">Descripcion</label>
    <textarea class="form-control" name="description" id="description" row="3">{{ old('description',$book->description)}}</textarea>
    @error('description')
        <small class="text-danger">{{ $message}}</small>
    @enderror
</div>

<input type="submit" value="Enviar" class="btn btn-primary">