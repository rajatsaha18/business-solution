<select name="category_id" class="form-control">
    <option value="" disabled selected>--Select Category--</option>
    @foreach ($sub_categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
</select>