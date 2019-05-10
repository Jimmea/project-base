<div class="row mb-3">
    <div class="col-md-8 offset-2">
        <form class="form-horizontal" method="POST" action="{{ $action }}">
            @if($category)
                {{ method_field('PUT') }}
            @endif
            <p>
                Những ô có dấu sao (<b style="color:Red">*</b>) là bắt buộc phải nhập.
            </p>
            <section id="general">
                <h6 class="font-weight-bold">THÔNG TIN CƠ BẢN</h6>
                <hr>
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="font-weight-bold">Tên bài viết <span class="color_red">(*)</span></label>
                    <span class="pull-right">Kí tự: 70/100</span>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="cat_name" placeholder="[Name]" value="{{ get_value_field('cat_name', $category) }}">
                    </div>
                    {!! get_error($errors, 'cat_name') !!}
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Danh mục tin tức</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <select name="cat_parent_id" class="form-control">
                            <option value="">-- Chọn một --</option>
                            @foreach($allListCategory as $categoryItem)
                                {{--@if($category && $category->id == $categoryItem['id'])--}}
                                {{--@continue;--}}
                                {{--@endif--}}
                                @php $selected = get_value_field('cat_parent_id', $category) == $categoryItem['id'] ? 'selected=selected' : '' @endphp
                                <option {{ $selected }} value="{{ $categoryItem['id'] }}">
                                    @if($level = $categoryItem['level'])
                                        @for($i = 0 ; $i < $level; $i ++)---@endfor
                                    @endif
                                    {{ $categoryItem['cat_name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Mô tả ngắn <span class="color_red">(*)</span></label>
                    <span class="pull-right">Kí tự: 70/100</span>
                    <textarea name="cat_meta_description" id="" cols="30" rows="3" class="form-control">{{ get_value_field('cat_meta_description', $category) }}</textarea>
                    {!! get_error($errors, 'cat_meta_description') !!}
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Nội dung bài viết <span class="color_red">(*)</span></label>
                    <textarea name="cat_meta_description" id="" cols="30" rows="3" class="form-control">{{ get_value_field('cat_meta_description', $category) }}</textarea>
                    {!! get_error($errors, 'cat_meta_description') !!}
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Trạng thái</label>
                    <div class="form-check-group">
                        <div>
                            <label class="radio-inline">
                                @php $selected = get_value_field('cat_new', $category) ? 'checked=checked' : '' @endphp
                                <input type="checkbox" name="cat_new" {{ $selected }} value="1"> MỚI &nbsp;
                            </label>
                        </div>
                        <div>
                            <label class="radio-inline">
                                @php $selected = get_value_field('cat_hot', $category) ? 'checked=checked' : '' @endphp
                                <input type="checkbox" name="cat_hot" {{ $selected }} value="1"> HOT
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Vị trí sắp xếp</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="number" class="form-control" name="cat_order" value="{{ get_value_field('cat_order',$category) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Kích hoạt</label>
                    <div class="form-check-group">
                        <label class="radio-inline">
                            <input type="radio" {{ get_value_field('cat_active', $category) == 1 ? 'checked=checked' : '' }} name="cat_active" value="1"> Có &nbsp;
                        </label>
                        <label class="radio-inline">
                            <input type="radio" {{ get_value_field('cat_active', $category) == 0 ? 'checked=checked' : '' }} name="cat_active" value="0"> Không
                        </label>
                    </div>
                </div>
            </section>

            <section id="seo">
                <h6 class="font-weight-bold">THÔNG TIN VỀ SEO</h6>
                <hr>
                <div class="form-group">
                    <label class="font-weight-bold">Meta Title <span class="color_red">(*)</span></label>
                    <span class="pull-right">Kí tự: 70/100</span>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="cat_meta_title" value="{{ get_value_field('cat_meta_title', $category) }}">
                    </div>
                    {!! get_error($errors, 'cat_meta_title') !!}
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Meta Description <span class="color_red">(*)</span></label>
                    <span class="pull-right">Kí tự: 70/100</span>
                    <textarea name="cat_meta_description" id="" cols="30" rows="3" class="form-control">{{ get_value_field('cat_meta_description', $category) }}</textarea>
                    {!! get_error($errors, 'cat_meta_description') !!}
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Meta Keyword <span class="color_red">(*)</span></label>
                    <span class="pull-right">Kí tự: 70/100</span>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="cat_meta_keyword" value="{{ get_value_field('cat_meta_keyword', $category) }}">
                    </div>
                    {!! get_error($errors, 'cat_meta_keyword') !!}
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Sau khi lưu lại</label>
                    <div class="form-check-group">
                        <label class="radio-inline">
                            <input type="radio" name="redirect" checked  value="1"> Thêm mới &nbsp;
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="redirect" value="2"> Quay về danh sách
                        </label>
                    </div>
                </div>

                <div class="form-group offset-2">
                    <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Lưu thông tin</button>
                    <button type="reset" class="btn btn-outline-primary mb-2"><i class="fa fa-plus"></i> Làm lại</button>
                </div>
            </section>
        </form>
    </div>
</div>