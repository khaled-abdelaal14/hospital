<div>
    @if($message)
    <div class="alert alert-info">تم ارسال البيانات بنجاح وسيتم التواصل معك عبر الهاتف</div>
    @endif
    @if($message2)
    <div class="alert alert-warning"> لا توجد مواعيد متاحة فى هذا اليوم برجاء اختيار موعد اخر </div>
    @endif    

        <div class="appointment-form">
            <form wire:submit.prevent="store">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" wire:model="name" name="username" placeholder="اسمك" required="">
                        <span class="icon fa fa-user"></span>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" wire:model="email" name="email" placeholder="البريد الالكتروني" required="">
                        <span class="icon fa fa-envelope"></span>
                    </div>

                  

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="exampleFormControlSelect1"> الدكتور</label>
                            <select name="doctor" wire:model="doctor"  class="form-select" id="exampleFormControlSelect1">
                                <option  selected >-- اختار من القائمة --</option>
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                           
                            </select>   
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="exampleFormControlSelect1"> القسم </label>
                            <select name="section" wire:model="section" wire:change="getsections" class="form-select" id="exampleFormControlSelect1">
                                <option selected >-- اختار من القائمة --</option>
                                @foreach($sections as $section)
                                <option value="{{$section->id}}">{{$section->name}}</option>
                                @endforeach
                         
                            </select>   
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                        <input type="tel" wire:model="phone" name="phone" placeholder="رقم الهاتف" required="">
                        <span class="icon fas fa-phone"></span>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                        <label for="exampleFormControlSelect1">تاريخ الموعد</label>
                        <input type="date" name="appointment_patient" wire:model="appointment_patient" required
                               class="form-control">
                    </div>
                    

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="notes" wire:model="notes" placeholder="ملاحظات"></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                            <span class="txt">تاكيد</span></button>
                    </div>
                </div>
            </form>
        </div>
</div>
