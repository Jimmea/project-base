<div class="row mb-3">
    <div class="col-md-8 offset-2">
        <p>
            Những ô có dấu sao (<b style="color:Red">*</b>) là bắt buộc phải nhập.
        </p>
        <h6 class="font-weight-bold">THÔNG TIN CƠ BẢN</h6>
        <hr>
        <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="font-weight-bold">Loại danh mục</label>
                <div class="input-group mb-2 mr-sm-2">
                    <select name="type" class="form-control">
                        <option value="">Chọn loại danh mục</option>
                        <option value="">Tin tức</option>
                        <option value="">Sản phẩm</option>
                        <option value="">Trang tĩnh</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Tên danh mục (*)</label>
                <span class="pull-right">Kí tự: 70/100</span>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="name" placeholder="[Name]">
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Danh mục cha</label>
                <div class="input-group mb-2 mr-sm-2">
                    <select name="type" class="form-control">
                        <option value="">Root</option>
                        <option value="">Phone</option>
                        <option value="">Sản phẩm</option>
                        <option value="">Trang tĩnh</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Trạng thái</label>
                <div class="input-group mb-2 mr-sm-2">
                    <select name="type" class="form-control">
                        <option value="">Hiển thị</option>
                        <option value="">Ẩn</option>
                        <option value="">Hot</option>
                        <option value="">Hiện lên trang chủ</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Vị trí sắp xếp</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="name" placeholder="[Name]">
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Kích hoạt</label>
                <div class="form-check-group">
                    <label class="radio-inline">
                        <input type="radio" name="active" id="" value="checkedValue"> Có &nbsp;
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="active" id="" value="checkedValue"> Không
                    </label>
                </div>
            </div>

            <h6 class="font-weight-bold">THÔNG TIN VỀ SEO</h6>
            <hr>
            <div class="form-group">
                <label class="font-weight-bold">Meta Title (*)</label>
                <span class="pull-right">Kí tự: 70/100</span>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Meta Description (*)</label>
                <span class="pull-right">Kí tự: 70/100</span>
                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Meta Keyword (*)</label>
                <span class="pull-right">Kí tự: 70/100</span>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Sau khi lưu lại</label>
                <div class="form-check-group">
                    <label class="radio-inline">
                        <input type="radio" name="active" checked id="" value="checkedValue"> Thêm mới &nbsp;
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="active" id="" value="checkedValue"> Quay về danh sách
                    </label>
                </div>
            </div>

            <div class="form-group offset-2">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Lưu thông tin</button>
                <button type="reset" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Làm lại</button>
            </div>
        </form>
    </div>
</div>