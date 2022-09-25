<template>
    <div>
        <div class="form-group">
            <label for="" class="text-muted">Select the Star Rating (1 is worst, 5 is best)</label>
            <star-rating
                class="fa-3x"
                v-model="review.rating"
            ></star-rating>
        </div>
        <div class="form-group">
            <label for="content" class="text-muted">Descript your Experience with</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control" v-model="review.content"></textarea>
        </div>
        <button class="btn btn-large btn-primary btn-block">Submit</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            review: {
                rating: 5,
                content: null
            }
        }
    },
    created() {
        // 
    }
}
</script>