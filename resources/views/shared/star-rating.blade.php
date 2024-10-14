<!-- input requires unique name and id -->

<div class="rate">
    <fieldset class="rating">
        <input type="radio" id="star5-{{$name}}" name="rating-{{$name}}" value="5" 
            {{ $rating == 5 ? 'checked' : '' }} {{ $isStatic ? 'disabled' : '' }} />
        <label class="full" for="star5-{{$name}}"></label>

        <input type="radio" id="star4-{{$name}}" name="rating-{{$name}}" value="4" 
            {{ $rating == 4 ? 'checked' : '' }} {{ $isStatic ? 'disabled' : '' }} />
        <label class="full" for="star4-{{$name}}"></label>

        <input type="radio" id="star3-{{$name}}" name="rating-{{$name}}" value="3" 
            {{ $rating == 3 ? 'checked' : '' }} {{ $isStatic ? 'disabled' : '' }} />
        <label class="full" for="star3-{{$name}}"></label>

        <input type="radio" id="star2-{{$name}}" name="rating-{{$name}}" value="2" 
            {{ $rating == 2 ? 'checked' : '' }} {{ $isStatic ? 'disabled' : '' }} />
        <label class="full" for="star2-{{$name}}"></label>

        <input type="radio" id="star1-{{$name}}" name="rating-{{$name}}" value="1" 
            {{ $rating == 1 ? 'checked' : '' }} {{ $isStatic ? 'disabled' : '' }} />
        <label class="full" for="star1-{{$name}}"></label>
    </fieldset>
</div>