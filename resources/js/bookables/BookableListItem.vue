<template>
    <div>
        <h1>{{ itemTitle }}</h1>
        <p>{{ itemContent }}</p>
    </div>
</template>

<script>
export default {
    props: { itemTitle: String, itemContent: String, price: Number },
    mounted() {
        console.log(this.itemTitle);
        this.itemTitle = "New Title"
    }
};
</script>
