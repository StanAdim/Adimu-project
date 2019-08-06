@csrf
<div class="form-group ">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{old('name')?? $customer->name}} " class="form-control" placeholder="Your Name..">
    @if(count($errors) > 0)
        <div class="alert alert-link text-danger">

            {{ $errors->first('name')}}
        </div>
    @endif

</div>
<div class="form-group  ">
    <label for="phone">Phone:</label>
    <input type="number" name="phone" id="phone" value="{{old('phone')?? $customer->phone}}" class="form-control" placeholder="Your phone no...">
    @if(count($errors) > 0)
        <div class="alert alert-link text-danger">

            {{ $errors->first('phone')}}
        </div>
    @endif
</div>

<div class="form-group ">
    <label for="email">E-Mail:</label>
    <input type="email" name="email" id="email" value="{{old('email')?? $customer->email}}" class="form-control" placeholder="Your email">
    @if(count($errors) > 0)
        <div class="alert alert-link text-danger">

            {{ $errors->first('email')}}
        </div>
    @endif
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach($companies as $company)
            <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected':''}}>{{$company->name}}</option>
        @endforeach
    </select>


</div>

<div class="form-group">
    <label for="product">Product:</label>
    <input type="text" name="product" id="product" value="{{old('product') ?? $customer->product}}" class="form-control" placeholder="To buy">
    @if(count($errors) > 0)
        <div class="alert alert-link text-danger">

            {{ $errors->first('product')}}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="status">Status:</label>
    <select  name="status" id="status" class="form-control custom-select">

        @foreach($customer ->StatusOptions() as $OptionKey => $OptionValue)
            <option value="{{$OptionKey}}" {{$customer->status==$OptionValue ?'selected':''}}>{{$OptionValue}}</option>
            @endforeach


    </select>

    @if(count($errors) > 0)
        <div class="alert alert-link text-danger">

            {{ $errors->first('status')}}
        </div>
    @endif
</div>