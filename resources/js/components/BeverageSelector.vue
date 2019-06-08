<template>

    <div class="form-group form-row">
        <label class="col-form-label col-sm-4" for="beverageSelect">Select a beverage</label>
        <select class="form-control col-sm"
                id="beverageSelect"
                v-model="selectedBeverage"
                v-on:change="$emit('selected', selectedBeverage)">

            <option :value="null" disabled selected>Select a beverage</option>
            <option :value="beverage" v-for="beverage in content">{{beverage.name}}</option>
        </select>

    </div>

</template>

<script>
    export default {
        name: "BeverageSelector",
        props: {content: {type: Array, default: () => [], required: true}},
        data: function () {
            return {selectedBeverage: null}
        }
    }
</script>

<style scoped>

</style>
