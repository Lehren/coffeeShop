<template>
    <div class="container">
        <div class="row">
            <div class="col-6 border-right">
                <vending-machine
                    :content="content"
                    @ordered="addOrder"
                />
            </div>

            <div class="col-6 border-left">
                <order-list :orderList="orderList"/>
            </div>
        </div>
    </div>
</template>

<script>
    import VendingMachine from "@/js/components/VendingMachine";
    import OrderList from "@/js/components/OrderList";
    import axios from "axios";
    import moment from "moment";
    import {cloneDeep} from "lodash";

    export default {
        name: 'App',
        components: {OrderList, VendingMachine},
        data() {
            return {
                content: [],
                orderList: []
            }
        },
        mounted() {
            axios.get('api/vending-machine')
                .then(response => {
                    this.content = response.data;
                });
        },
        methods: {
            addOrder(selectedBeverage, selectedOptions) {
                this.orderList.push({
                    'time': moment(),
                    'selectedBeverage': cloneDeep(selectedBeverage),
                    'selectedOptions': cloneDeep(selectedOptions)
                });
            }
        }
    }
</script>

<style scoped>

</style>
