@if($user_id==null)
<div class="text-secondary text-decoration-none mt-2">
<p><i class="far fa-thumbs-up fa-fw fa-lg"></i>{{$count_good}}</p>
</div>
@elseif($user_flag==true)
<div class="text-secondary text-decoration-none mt-2">
<p><i class="far fa-thumbs-up fa-fw fa-lg"></i>{{$count_good}}</p>
</div>
@elseif($good_flag==true)
<a class="text-primary text-decoration-none mt-2" href="{{url('/delete_good/'.$user_id.'/'.$report_id)}}"><i class="far fa-thumbs-up fa-fw fa-lg"></i>{{$count_good}}</a>
@else
<a class="text-secondary text-decoration-none mt-2" href="{{url('/add_good/'.$user_id.'/'.$report_id)}}"><i class="far fa-thumbs-up fa-fw fa-lg"></i>{{$count_good}}</a>
@endif