<template>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <vending-machine :foodItems="foodItems"></vending-machine>

            </div>

            <div class="col-6">

                <order-list></order-list>

            </div>
        </div>
    </div>
</template>

<script>
    import VendingMachine from "@/js/components/VendingMachine";
    import OrderList from "@/js/components/OrderList";
    import * as axios from "axios";

    export default {
        name: 'App',
        components: {OrderList, VendingMachine},
        data() {
            return {
                foodItems: [1,2]
            }
        }
    }
</script>

<style scoped>

</style>
