<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center margin-bottom-10">
    <div style="padding: 10px">
        <h2 class="center" style="color: #015591">Browse by company : Choose Alphabet</h2>
    </div>
    <div class="alphabet">
            @foreach(range('A','Z') as $letter)
                <a href="{{route('company-list',$letter)}}" style="font-weight: 300;font-size: 16px;padding: 2px 2.4px;min-width: 23px;" class="@php if ($character == $letter) { echo "active"; } @endphp">{{$letter}}</a>
            @endforeach
    </div>
</div>

