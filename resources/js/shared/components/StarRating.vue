<template>
    <div>
        <i
            class="fas fa-star"
            v-for="star in fullStars"
            :key="'full' + star"
            @click="$emit('rating:changed', star)"
        ></i>
        <i class="fas fa-star-half-alt" v-if="halfStar"></i>
        <i
            class="far fa-star"
            v-for="star in emptyStarts"
            :key="'empty' + star"
            @click="$emit('rating:changed', fullStars+star)"
        ></i>
    </div>
</template>
<script>
export default {
    props: {
        rating: Number
    },
    computed: {
        halfStar() {
            const fraction = Math.round((this.rating - Math.floor(this.rating))*100);
            return 0 < fraction && fraction < 50;
        },
        fullStars() {
            return Math.round(this.rating);
        },
        emptyStarts() {
            return 5 - Math.ceil(this.rating);
        }
    }
}
</script>