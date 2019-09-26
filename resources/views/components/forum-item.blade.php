<div class="md:flex md:justify-between">
    <div class="flex flex-1">
        <div class="w-10"><i class="fa fa-comments fa-lg"></i></div>
        <div class="flex-1">
            <a href="{{route('forum',["id" => $child->id])}}">{{$child->name}}</a> <br>
            <div class="description ellipsis-2">{{$child->description}}</div>
        </div>
        <div class="w-16 text-right">
            {!! ['<i class="fa fa-check-circle text-green-500"></i>','<i class="fa fa-times-circle text-red-500"></i>'][rand(0,1)]  !!}
        </div>
    </div>
    <div class="flex mt-5 md:mt-0">
        <div class="w-32 text-right pr-5">
            Threads: {{$child->threadsCount}}<br>
            Posts: {{$child->replyCount}}
        </div>
        <div class="w-64">
            <a href="{{route('thread')}}">{{$child->latestReply->thread->title}}</a><br>
            <div class="description">
                <span class="author">von <a href="#">{{$child->latestReply->user->name}}</a></span><br>
                <span class="date">{{ $child->latestReply->created_at->locale('de_DE')->diffForHumans() }}</span>
            </div>
        </div>
    </div>
</div>
