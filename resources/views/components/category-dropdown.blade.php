<select class="my-4" name="categories" id="categories">
    @foreach($categories as $category)
        <option value={{$category->name}}>{{$category->name}}</option>
    @endforeach
</select>
