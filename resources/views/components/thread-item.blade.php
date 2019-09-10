<div class="md:flex md:justify-between">
    <div class="flex flex-1">
        <div class="w-10"><i class="fa fa-comments fa-lg"></i></div>
        <div class="flex-1">
            <a href="#">How to make a forum</a> <br>
            <div class="flex">
            <span class="description flex justify-between">
                My answser to this is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda beatae consequatur consequuntur culpa cumque dolorum excepturi explicabo illum in incidunt, iste maiores nisi non omnis possimus repudiandae vel voluptatibus voluptatum?
            </span>
                <span class="description text-right flex-shrink-0 self-end">{{ \Carbon\Carbon::now()->locale('de_DE')->subMinutes(rand(1,120))->diffForHumans() }}</span>
            </div>
        </div>
    </div>
</div>
