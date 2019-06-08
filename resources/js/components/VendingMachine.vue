<template>

    <div>
        <div v-for="foodItem in foodItems">

            <label>
                Helloooo
                <select>
                    <option>okokkook</option>
                </select>
            </label>


        </div>
    </div>



</template>

<script>
    export default {
        name: "VendingMachine",
        props: ['foodItems']
    }
</script>

<style scoped>

</style>
