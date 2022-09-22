<template>
    <div>
        <bookable-list-item
            item-title="Cheap Villa"
            item-content="Very cheap villa"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item
            item-title="Cheap Villa 2"
            item-content="Very cheap villa 2"
            :price="500"
        ></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
    components: {
        BookableListItem: BookableListItem
    }
}
</script>