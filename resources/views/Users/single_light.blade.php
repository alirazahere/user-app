<div class="user">
    <form action="javascript:void(0)">
        @php
            $attributes = $user->getAttributes();
                   $show = array('first_name','last_name','role','department','email');
        @endphp
        @foreach($attributes as $key => $attr)
            @if(in_array($key,$show))
                <div class="form-group">
                    <label for="{{$key}}">{{ucwords($key)}}</label>
                    <input type="text" value="{{$attr}}" class="form-control" id="{{$key}}" readonly>
                </div>
            @endif
        @endforeach
    </form>
</div>
