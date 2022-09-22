<template>
    <div>
        <bookable-list-item v-if="bookable1"
            :item-title="bookable1.title"
            :item-content="bookable1.content"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item v-if="bookable2"
            :item-title="bookable2.title"
            :item-content="bookable2.content"
            :price="500"
        ></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
    components: {
        BookableListItem: BookableListItem
    },
    data() {
        return {
            bookable1: null,
            bookable2: null
        }
    },
    created() {
        setTimeout(() => {
            this.bookable1 = {
                title: "Cheap Villa from date()",
                content: "Very cheap villa from date()"
            };
            this.bookable2 = {
                title: "Cheap Villa 2 from date()",
                content: "Very cheap villa 2 from date()"
            };
        }, 2000);
    }
}
</script>