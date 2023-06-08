<div class="bluenav">
    <div class="box-size">
        @foreach ($icons as $item)
        <div v-for="(element,index) in icons" class="icon">
            <img :src="path+element.url" alt="" :id="(element.url.includes('svg')? 'icon-img':'' )">
            <span>
                {{ element.name }}
            </span>
        </div>
        @endforeach
    </div>      
</div>