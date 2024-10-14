<!-- input requires unique name and id -->

<div class="rate">
    <fieldset class="rating">
        <input type="radio" id="star5-<?php echo e($name); ?>" name="rating-<?php echo e($name); ?>" value="5" 
            <?php echo e($rating == 5 ? 'checked' : ''); ?> <?php echo e($isStatic ? 'disabled' : ''); ?> />
        <label class="full" for="star5-<?php echo e($name); ?>"></label>

        <input type="radio" id="star4-<?php echo e($name); ?>" name="rating-<?php echo e($name); ?>" value="4" 
            <?php echo e($rating == 4 ? 'checked' : ''); ?> <?php echo e($isStatic ? 'disabled' : ''); ?> />
        <label class="full" for="star4-<?php echo e($name); ?>"></label>

        <input type="radio" id="star3-<?php echo e($name); ?>" name="rating-<?php echo e($name); ?>" value="3" 
            <?php echo e($rating == 3 ? 'checked' : ''); ?> <?php echo e($isStatic ? 'disabled' : ''); ?> />
        <label class="full" for="star3-<?php echo e($name); ?>"></label>

        <input type="radio" id="star2-<?php echo e($name); ?>" name="rating-<?php echo e($name); ?>" value="2" 
            <?php echo e($rating == 2 ? 'checked' : ''); ?> <?php echo e($isStatic ? 'disabled' : ''); ?> />
        <label class="full" for="star2-<?php echo e($name); ?>"></label>

        <input type="radio" id="star1-<?php echo e($name); ?>" name="rating-<?php echo e($name); ?>" value="1" 
            <?php echo e($rating == 1 ? 'checked' : ''); ?> <?php echo e($isStatic ? 'disabled' : ''); ?> />
        <label class="full" for="star1-<?php echo e($name); ?>"></label>
    </fieldset>
</div><?php /**PATH /var/www/html/Assignment2/resources/views/shared/star-rating.blade.php ENDPATH**/ ?>