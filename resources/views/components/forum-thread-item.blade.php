<div class="flex justify-between rounded-bl">
    <div class="flex-shrink-0 bg-gray-300 md:w-48 w-40 md:p-6 p-3 rounded-bl">
        <div class="text-center flex flex-col rounded-bl">
            <i class="fa fa-user-circle md:text-6xl text-4xl text-gray-500"></i>
            <a href="{{route('user-profile')}}">Peter</a>
            <span class="description">
                <span class="font-bold">{!! ['Benutzer', 'Moderator', 'Administrator'][rand(0,2)] !!}</span>
                <br> <i class="fa fa-lg m-2 fa-{{ ['medal','ribbon','award','certificate'][rand(0,3)] }} text-{{ ['red','blue','green','yellow'][rand(0,3)] }}-700"></i>
            </span>
            <div class="description">
                {{rand(10,2500)}} Beiträge
            </div>

        </div>
    </div>
    <div class="md:p-6 p-3 md:text-base text-sm flex flex-col">
        <div class="flex-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium earum eos mollitia, natus numquam officia qui repellat! Culpa deserunt, distinctio ducimus facilis fugiat labore laborum, magnam, odit repellendus rerum vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa delectus deleniti error ex expedita inventore iste laudantium neque non officiis quaerat qui quod, ratione suscipit tempore temporibus tenetur unde?
            @if($cite==1)
                <div class="cite text-gray-600 p-5 border-l-2 my-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi, debitis dolorum est expedita illum laudantium magnam modi quam quasi ratione repellendus soluta tempora vel velit. Aspernatur maxime perspiciatis rem?</div>@endif
        </div>
        <div class="text-xs ">
            <span class="badge badge-pill badge-muted"><i class="fa fa-paperclip"></i> Attachment.zip</span>
            <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
            <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
            <a href="#" class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</a>
        </div>
    </div>
</div>
