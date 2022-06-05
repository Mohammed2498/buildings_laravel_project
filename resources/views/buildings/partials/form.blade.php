<div class="col-lg-10">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">اضافة برج سكني</h5>
        </div>
        <div class="card-body">
            <label for="name">الاسم</label>
            <div class="form-group mb-0">
                <input value="{{ old('name', $building->name ?? '') }}" name="name" type="text" class="form-control"
                    name="inputText" id="inputText" placeholder="اسم البرج السكني">
            </div>
        </div>
        <div class="card-body">
            <label for="description">الوصف</label>
            <div class="form-group mb-0">
                <textarea value="{{ old('description', $building->description ?? '') }}" class="form-control" maxlength="225"
                    rows="5" name="description" id="maxlength-textarea"
                    placeholder="الحد الأقصى للوصف 130 حرف"></textarea>
            </div>
        </div>
        <div class="card-body">
            <label for="address">العنوان</label>
            <div class="form-group mb-0">
                <input value="{{ old('address', $building->address ?? '') }}" name="address" type="text"
                    class="form-control" name="inputText" id="inputText" placeholder="العنوان">
            </div>
        </div>
        <div class="card-body">
            <label for="image">اضافة صورة</label>
            <div class="form-group mb-0">
                <input value="{{ old('image', $building->image ?? '') }}" name="image" type="file"
                    class="form-control" name="inputText" id="inputText" placeholder=" اضافة صورة">
            </div>
        </div>
        <div class="card-body">
            <label for="apartments_number">عدد الشقق</label>
            <div class="form-group mb-0">
                <input value="{{ old('apartments_number', $building->apartments_number ?? '') }}"
                    name="apartments_number" type="number" class="form-control" name="inputText" id="inputText"
                    placeholder="عدد الشقق">
            </div>
        </div>

        <!-- End col -->
    </div>
</div>
