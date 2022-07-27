<div class="col-lg-10">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">اضافة شقة سكنية </h5>
        </div>
        <div class="card-body">
            <label for="number">رقم الشقة</label>
            <div class="form-group mb-0">
                <input value="{{ old('number', $apartment->number ?? '') }}" name="number" type="number"
                    class="form-control" id="inputText" placeholder=" رقم الشقة السكنية">
                @error('number')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="resident">اسم الساكن</label>
            <div class="form-group mb-0">
                <input value="{{ old('resident', $apartment->resident ?? '') }}" name="resident" type="text"
                    class="form-control" id="inputText" placeholder="اسم المالك">
                @error('resident')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- <div class="card-body">
            <label for="user_id">اختارالمالك</label>
            <select class="form-control" name="user_id" id="user_id">
                <option value="">اختارالمالك</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}"
                        {{ old('user_id', $apartment->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('user_id')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div> --}}
    <div class="card-body">
        <label for="building_id">اختار البرج السكني</label>
        <select class="form-control" name="building_id" id="">
            <option value="">اخنر البرج السكني</option>
            @foreach ($buildings as $building)
                <option value="{{ $building->id }}"
                    {{ old('building_id', $apartment->building_id) == $building->id ? 'selected' : '' }}>
                    {{ $building->name }}
                </option>
            @endforeach
        </select>
        @error('building_id')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
</div>
