<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for Task</h2>
            <span wire:click = "increment" class="fas fa-plus px-2 py-1 cursor-pointer" />
    </div>
    @for($i = 0; $i <= $steps; $i++)
    <div class="flex justify-center py-2">
    
    <input type="text" name="step" class="py-2 px-2 border rounded" placeholder="{{'Describe Step '.($i+1)}}"/>
    <span class="fas fa-times text-red-400 p-3" />
    
    </div>
    @endfor
</div>  
