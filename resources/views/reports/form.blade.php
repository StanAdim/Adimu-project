@csrf
<div class="h5 text-center bg-dark text-light py-3">
    <u><strong >Your Reports</strong></u>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group ">
            <select name="user_id" id="user_id" class="custom-select form-control">

                @foreach($users as $user)

                    <option value="{{ $user->id}}" {{$user->id == $report->user_id ? 'selected':''}}>{{$user->name}}</option>
                @endforeach

            </select>
            @if(count($errors)>0)

                <div class="alert alert-link">
                    <div class="text-danger">
                        {{$errors->first('user_id')}}
                    </div>
                </div>
            @endif
        </div>
    </div>{{--end col-4 second--}}
    <div class="col-md-4">
        <div class="form-group ">
            <input type="text" name="subject" id="subject"  class="form-control"  placeholder="What Subject" value="{{old('subject') ?? $report->subject}}">
            @if(count($errors)>0)

                <div class="alert alert-link">
                    <div class="text-danger">
                        {{$errors->first('subject')}}
                    </div>
                </div>
            @endif
        </div>
    </div>{{--end col-6 second--}}



    <div class="col-md-4">
        <div class="custom-file " id="fileUp">
            <label for="file " class="custom-file-label" id="fileUp">Upload Doc</label>
            <input type="file" class="custom-file-input" >
        </div>
    </div>{{--end col-6 first--}}
</div>

<div class="form-group">

    <textarea name="report" id="report" class="form-control"  rows="5" placeholder="Write your report here">{{old('report') ?? $report->report}}</textarea>
    @if(count($errors)>0)

        <div class="alert alert-link">
            <div class="text-danger">
                {{$errors->first('report')}}
            </div>
        </div>
    @endif
</div>