<div class="col-lg-10">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">اضافة مستحدم جديد</h5>
        </div>
        <div class="card-body">
            <label for="name">الاسم</label>
            <div class="form-group mb-0">
                <input value="{{ old('name', $user->name ?? '') }}" name="name" type="text" class="form-control"
                    placeholder="اسم المستخدم " id="">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="email">البريد الالكتروني</label>
            <div class="form-group mb-0">
                <input value="{{ old('email', $user->email ?? '') }}" name="email" type="email"
                    class="form-control" placeholder="البريد الالكتروني " id="email">
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="country"> الدولة</label>
            <div class="form-group mb-0">
                <input value="{{ old('country', $user->profile->country ?? '') }}" name="country" type="text"
                    class="form-control" placeholder="الدولة" id="country">
                @error('country')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="city"> المدينة</label>
            <div class="form-group mb-0">
                <input value="{{ old('city', $user->profile->city ?? '') }}" name="city" type="text"
                    class="form-control" placeholder="المدينة" id="city">
                @error('city')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="birthdate"> تاريخ الميلاد</label>
            <div class="form-group mb-0">
                <input value="{{ old('birthdate', $user->profile->birthdate ?? '') }}" name="birthdate" type="date"
                    class="form-control" placeholder="تاريخ الميلاد" id="birthdate">
                @error('birthdate')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="password">كلمة المرور</label>
            <div class="form-group mb-0">
                <input name="password" type="password" class="form-control" id="password" placeholder="كلمة المرور ">
                @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="password_confirmation"> تأكيد كلمة المرور</label>
            <div class="form-group mb-0">
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                    placeholder=" تأكيد كلمة المرور  ">
                @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="image">ادراج صورة</label>
            <div class="form-group mb-0">
                <input name="image" type="file" class="form-control" id="image"
                    placeholder="ادراج صورة">
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
