<template>
    <div>
        <bookable-list-item
            :item-title="bookable1.title"
            :item-content="bookable1.content"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item
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
            bookable1: {
                title: "Cheap Villa from date()",
                content: "Very cheap villa from date()"
            },
            bookable2: {
                title: "Cheap Villa 2 from date()",
                content: "Very cheap villa 2 from date()"
            },
        }
    },
    created() {
        console.log('created');
        console.log(this.bookable1);
        console.log(this.bookable2);

        setTimeout(() => {
            this.bookable1.title = 'Expensice villa';
            this.bookable2.title = 'Very expencive villa';
        }, 5000);
    }
}
</script>